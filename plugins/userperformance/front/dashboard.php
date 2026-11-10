<?php
include('../../../inc/includes.php');
Session::checkRight('config', READ);

Html::header(__('User Performance & KPI'), $_SERVER['REQUEST_URI'], 'tools', 'none');

global $DB;

// --- 1. Get Filters & Sort Params ---
$date_from   = $_GET['date_from'] ?? date('Y-m-01');
$date_to     = $_GET['date_to'] ?? date('Y-m-d');
$ticket_type = $_GET['ticket_type'] ?? '';
$tech_id     = $_GET['tech_id'] ?? '';
$group_id    = $_GET['group_id'] ?? '';
$cat_id      = $_GET['category'] ?? '';
$status      = $_GET['status'] ?? '';
$priority    = $_GET['priority'] ?? '';
$group_by    = $_GET['group_by'] ?? 'tech';
$sort_by     = $_GET['sort_by'] ?? 'total';
$sort_order  = $_GET['sort_order'] ?? 'DESC';

// --- 2. Build SQL Query ---
$where = ["glpi_tickets.is_deleted = 0"];
$where[] = "DATE(glpi_tickets.date) BETWEEN '{$date_from}' AND '{$date_to}'";

if ($ticket_type !== '') $where[] = "glpi_tickets.type = " . (int)$ticket_type;
if ($status !== '')      $where[] = "glpi_tickets.status = " . (int)$status;
if ($priority !== '')    $where[] = "glpi_tickets.priority = " . (int)$priority;
if ($cat_id !== '')      $where[] = "glpi_tickets.itilcategories_id = " . (int)$cat_id;

if ($tech_id !== '') {
    $where[] = "EXISTS (SELECT 1 FROM glpi_tickets_users tu WHERE tu.tickets_id = glpi_tickets.id AND tu.users_id = " . (int)$tech_id . " AND tu.type = 2)";
}
if ($group_id !== '') {
    $where[] = "EXISTS (SELECT 1 FROM glpi_groups_tickets gt WHERE gt.tickets_id = glpi_tickets.id AND gt.groups_id = " . (int)$group_id . " AND gt.type = 2)";
}

$where_sql = implode(' AND ', $where);

$select = "";
$join = "";
$group_by_sql = "";
$title_col = "";

if ($group_by === 'tech') {
    $join = "LEFT JOIN glpi_tickets_users tu ON (tu.tickets_id = glpi_tickets.id AND tu.type = 2) LEFT JOIN glpi_users u ON (u.id = tu.users_id)";
    $select = "IFNULL(u.name, 'Unassigned') AS group_name";
    $group_by_sql = "GROUP BY tu.users_id, u.name";
    $title_col = "Technician";
} elseif ($group_by === 'group') {
    $join = "LEFT JOIN glpi_groups_tickets gt ON (gt.tickets_id = glpi_tickets.id AND gt.type = 2) LEFT JOIN glpi_groups g ON (g.id = gt.groups_id)";
    $select = "IFNULL(g.name, 'No Group') AS group_name";
    $group_by_sql = "GROUP BY gt.groups_id, g.name";
    $title_col = "Support Group";
} elseif ($group_by === 'category') {
    $join = "LEFT JOIN glpi_itilcategories ic ON (ic.id = glpi_tickets.itilcategories_id)";
    $select = "IFNULL(ic.name, 'No Category') AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.itilcategories_id, ic.name";
    $title_col = "Category";
} elseif ($group_by === 'priority') {
    $select = "CASE glpi_tickets.priority WHEN 1 THEN 'Very Low' WHEN 2 THEN 'Low' WHEN 3 THEN 'Medium' WHEN 4 THEN 'High' WHEN 5 THEN 'Very High' ELSE 'Unknown' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.priority";
    $title_col = "Priority";
} elseif ($group_by === 'status') {
    $select = "CASE glpi_tickets.status WHEN 1 THEN 'New' WHEN 2 THEN 'Assigned' WHEN 3 THEN 'Planned' WHEN 4 THEN 'Pending' WHEN 5 THEN 'Solved' WHEN 6 THEN 'Closed' ELSE 'Other' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.status";
    $title_col = "Status";
} elseif ($group_by === 'type') {
    $select = "CASE glpi_tickets.type WHEN 1 THEN 'Incident' WHEN 2 THEN 'Request' ELSE 'Other' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.type";
    $title_col = "Ticket Type";
}

$sql = "SELECT 
            $select,
            COUNT(glpi_tickets.id) AS total,
            SUM(CASE WHEN glpi_tickets.status = 5 THEN 1 ELSE 0 END) AS solved,
            SUM(CASE WHEN glpi_tickets.status = 6 THEN 1 ELSE 0 END) AS closed,
            SUM(CASE WHEN glpi_tickets.status IN (5,6) THEN 1 ELSE 0 END) AS resolved,
            SUM(CASE WHEN ((glpi_tickets.solvedate IS NOT NULL AND glpi_tickets.solvedate <= glpi_tickets.time_to_resolve) OR (glpi_tickets.closedate IS NOT NULL AND glpi_tickets.closedate <= glpi_tickets.time_to_resolve)) THEN 1 ELSE 0 END) AS sla_compliant,
            SUM(CASE WHEN (glpi_tickets.solvedate IS NOT NULL AND glpi_tickets.solvedate > glpi_tickets.time_to_resolve) OR (glpi_tickets.closedate IS NOT NULL AND glpi_tickets.closedate > glpi_tickets.time_to_resolve) THEN 1 ELSE 0 END) AS late_done,
            SUM(CASE WHEN glpi_tickets.solvedate IS NULL AND glpi_tickets.closedate IS NULL AND NOW() > glpi_tickets.time_to_resolve THEN 1 ELSE 0 END) AS breached_open,
            AVG(IFNULL(TIMESTAMPDIFF(SECOND, glpi_tickets.date, glpi_tickets.takeintoaccountdate), 0)) AS avg_tto,
            AVG(IFNULL(TIMESTAMPDIFF(SECOND, glpi_tickets.date, IFNULL(glpi_tickets.solvedate, glpi_tickets.closedate)), 0)) AS avg_ttr,
            SUM((SELECT COUNT(*) FROM glpi_itilfollowups f WHERE f.itemtype = 'Ticket' AND f.items_id = glpi_tickets.id)) AS followups_count
        FROM glpi_tickets
        $join
        WHERE $where_sql
        $group_by_sql";

$results = [];
try {
    $res = $DB->doQuery($sql);
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            // Calculate Performance Index for every row first
            $total = (int)$row['total'];
            $resolved = (int)$row['resolved'];
            $sla_ok = (int)$row['sla_compliant'];
            $followups = (int)$row['followups_count'];
            $avg_tto = (int)$row['avg_tto'];
            $avg_ttr = (int)$row['avg_ttr'];
            
            $resolution_rate = $total > 0 ? ($resolved / $total) : 0;
            $sla_rate = $total > 0 ? ($sla_ok / $total) : 0;
            $pending = $total - $resolved;
            $pending_score = $total > 0 ? (1 - ($pending / $total)) : 0;
            $followup_score = $total > 0 ? min(1, ($followups / $total)) : 0;
            $tto_eff = $avg_tto > 0 ? max(0, 1 - ($avg_tto / 86400)) : 0;
            $ttr_eff = $avg_ttr > 0 ? max(0, 1 - ($avg_ttr / 172800)) : 0;

            $perf = (0.35 * $sla_rate) + (0.30 * $resolution_rate) + (0.10 * $followup_score) + (0.10 * $pending_score) + (0.075 * $tto_eff) + (0.075 * $ttr_eff);
            $row['perf_index'] = round($perf * 100, 1);
            
            $results[] = $row;
        }
    }
} catch (\Throwable $e) {
    echo "<div class='alert alert-danger'><b>SQL Error:</b> " . htmlspecialchars($e->getMessage()) . "</div>";
}

// --- 3. Sort the Results in PHP ---
usort($results, function($a, $b) use ($sort_by, $sort_order) {
    $valA = 0; $valB = 0;
    if ($sort_by === 'total')     { $valA = $a['total']; $valB = $b['total']; }
    elseif ($sort_by === 'perf')  { $valA = $a['perf_index']; $valB = $b['perf_index']; }
    elseif ($sort_by === 'solved'){ $valA = $a['solved']; $valB = $b['solved']; }
    elseif ($sort_by === 'closed'){ $valA = $a['closed']; $valB = $b['closed']; }
    elseif ($sort_by === 'sla_ok'){ $valA = $a['sla_compliant']; $valB = $b['sla_compliant']; }
    elseif ($sort_by === 'sla_bad'){ $valA = ($a['late_done'] + $a['breached_open']); $valB = ($b['late_done'] + $b['breached_open']); }
    
    if ($valA == $valB) return 0;
    if ($sort_order === 'ASC') return ($valA < $valB) ? -1 : 1;
    return ($valA > $valB) ? -1 : 1;
});
?>

<style>
    .kpi-card { border-radius: 10px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.05); }
    .kpi-card .card-body { padding: 0.75rem 1rem; }
    .filter-bar { background: #fff; border-radius: 8px; padding: 0.75rem; border: 1px solid #e6e7e9; box-shadow: 0 1px 3px rgba(0,0,0,0.02); }
    .filter-bar label { font-size: 0.7rem; font-weight: 600; color: #6c757d; margin-bottom: 0.2rem; text-transform: uppercase; }
    .filter-bar select, .filter-bar input { font-size: 0.8rem; height: 32px; padding: 0.2rem 0.5rem; }
    .table-compact th { font-size: 0.7rem; text-transform: uppercase; color: #6c757d; font-weight: 600; padding: 0.5rem; background: #f6f8fa; }
    .table-compact td { font-size: 0.8rem; padding: 0.4rem 0.5rem; vertical-align: middle; }
</style>



<div class="container-fluid mt-2" id="dashboard-content">

    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3 class="m-0 text-primary fw-bold">
            <i class="ti ti-chart-bar me-2"></i>KPI Report by <?= $title_col ?>
        </h3>
        <div class="d-flex gap-2">
            <?php $q = http_build_query($_GET); ?>
            <a href="export.php?format=csv&<?= $q ?>" class="btn btn-sm btn-outline-secondary"><i class="ti ti-file-text"></i> CSV</a>
            <a href="export.php?format=excel&<?= $q ?>" class="btn btn-sm btn-outline-success"><i class="ti ti-file-spreadsheet"></i> Excel</a>
            <a href="export.php?format=pdf&<?= $q ?>" class="btn btn-sm btn-outline-danger"><i class="ti ti-download"></i> PDF</a>
        </div>
    </div>

    <!-- Filters -->
    <form method="get" action="" class="filter-bar mb-3">
        <div class="row g-2 align-items-end">
            <div class="col-md-2"><label>Date From</label><input type="date" name="date_from" class="form-control" value="<?= $date_from ?>"></div>
            <div class="col-md-2"><label>Date To</label><input type="date" name="date_to" class="form-control" value="<?= $date_to ?>"></div>
            <div class="col-md-2">
                <label>Ticket Type</label>
                <select name="ticket_type" class="form-select">
                    <option value="">All</option>
                    <option value="1" <?= $ticket_type == '1' ? 'selected' : '' ?>>Incident</option>
                    <option value="2" <?= $ticket_type == '2' ? 'selected' : '' ?>>Request</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Technician</label>
                <select name="tech_id" class="form-select">
                    <option value="">All</option>
                    <?php foreach ($DB->request(['FROM' => 'glpi_users', 'WHERE' => ['is_active' => 1]]) as $u) echo "<option value='{$u['id']}' " . ($tech_id == $u['id'] ? 'selected' : '') . ">{$u['name']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-2">
                <label>Group</label>
                <select name="group_id" class="form-select">
                    <option value="">All</option>
                    <?php foreach ($DB->request(['FROM' => 'glpi_groups', 'WHERE' => ['is_assign' => 1]]) as $g) echo "<option value='{$g['id']}' " . ($group_id == $g['id'] ? 'selected' : '') . ">{$g['name']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-2">
                <label>Category</label>
                <select name="category" class="form-select">
                    <option value="">All</option>
                    <?php foreach ($DB->request(['FROM' => 'glpi_itilcategories']) as $c) echo "<option value='{$c['id']}' " . ($cat_id == $c['id'] ? 'selected' : '') . ">{$c['name']}</option>"; ?>
                </select>
            </div>
            <div class="col-md-2">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="">All</option>
                    <option value="1" <?= $status == '1' ? 'selected' : '' ?>>New</option>
                    <option value="2" <?= $status == '2' ? 'selected' : '' ?>>Assigned</option>
                    <option value="5" <?= $status == '5' ? 'selected' : '' ?>>Solved</option>
                    <option value="6" <?= $status == '6' ? 'selected' : '' ?>>Closed</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Priority</label>
                <select name="priority" class="form-select">
                    <option value="">All</option>
                    <option value="3" <?= $priority == '3' ? 'selected' : '' ?>>Medium</option>
                    <option value="4" <?= $priority == '4' ? 'selected' : '' ?>>High</option>
                    <option value="5" <?= $priority == '5' ? 'selected' : '' ?>>Very High</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Group By</label>
                <select name="group_by" class="form-select">
                    <option value="tech" <?= $group_by == 'tech' ? 'selected' : '' ?>>Technician</option>
                    <option value="group" <?= $group_by == 'group' ? 'selected' : '' ?>>Support Group</option>
                    <option value="category" <?= $group_by == 'category' ? 'selected' : '' ?>>Category</option>
                    <option value="priority" <?= $group_by == 'priority' ? 'selected' : '' ?>>Priority</option>
                    <option value="status" <?= $group_by == 'status' ? 'selected' : '' ?>>Status</option>
                    <option value="type" <?= $group_by == 'type' ? 'selected' : '' ?>>Ticket Type</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Sort By</label>
                <select name="sort_by" class="form-select">
                    <option value="total" <?= $sort_by == 'total' ? 'selected' : '' ?>>Total Tickets</option>
                    <option value="perf" <?= $sort_by == 'perf' ? 'selected' : '' ?>>Performance Index</option>
                    <option value="solved" <?= $sort_by == 'solved' ? 'selected' : '' ?>>Solved</option>
                    <option value="closed" <?= $sort_by == 'closed' ? 'selected' : '' ?>>Closed</option>
                    <option value="sla_ok" <?= $sort_by == 'sla_ok' ? 'selected' : '' ?>>SLA Compliant</option>
                    <option value="sla_bad" <?= $sort_by == 'sla_bad' ? 'selected' : '' ?>>SLA Non-Compliant</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Order</label>
                <select name="sort_order" class="form-select">
                    <option value="DESC" <?= $sort_order == 'DESC' ? 'selected' : '' ?>>Descending</option>
                    <option value="ASC" <?= $sort_order == 'ASC' ? 'selected' : '' ?>>Ascending</option>
                </select>
            </div>
            <div class="col-md-2 d-flex gap-1">
                <button type="submit" class="btn btn-primary w-100" style="height: 32px; padding: 0;"><i class="ti ti-filter me-1"></i> Apply</button>
                <button type="button" class="btn btn-outline-danger w-50" style="height: 32px; padding: 0;" onclick="resetFilters()"><i class="ti ti-reload"></i></button>
            </div>
        </div>
    </form>

    <!-- Data Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-sm table-hover table-compact mb-0" id="kpi-table">
                <thead>
                    <tr>
                        <th><?= $title_col ?></th>
                        <th class="text-end">Total</th>
                        <th class="text-end text-primary">Solved</th>
                        <th class="text-end text-primary">Closed</th>
                        <th class="text-end text-red">SLA Non-Compliant</th>
                        <th class="text-end text-green">SLA Compliant</th>
                        <th class="text-end">Follow-ups</th>
                        <th class="text-end fw-bold">Performance Index</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($results)): ?>
                        <tr><td colspan="8" class="text-center text-muted py-4">No data found for the selected filters.</td></tr>
                    <?php else: ?>
                        <?php foreach ($results as $row): 
                            $total = (int)$row['total'];
                            $solved = (int)$row['solved'];
                            $closed = (int)$row['closed'];
                            $resolved = (int)$row['resolved'];
                            $sla_ok = (int)$row['sla_compliant'];
                            $sla_bad = (int)$row['late_done'] + (int)$row['breached_open'];
                            $followups = (int)$row['followups_count'];
                            $perf = $row['perf_index'];
                        ?>
                        <tr>
                            <td class="fw-bold"><?= htmlspecialchars($row['group_name']) ?></td>
                            <td class="text-end fw-bold"><?= $total ?></td>
                            <td class="text-end text-primary"><?= $solved ?></td>
                            <td class="text-end text-primary"><?= $closed ?></td>
                            <td class="text-end text-red"><?= $sla_bad ?></td>
                            <td class="text-end text-green"><?= $sla_ok ?></td>
                            <td class="text-end"><?= $followups ?></td>
                            <td class="text-end fw-bold <?= $perf > 80 ? 'text-green' : ($perf > 50 ? 'text-orange' : 'text-red') ?>">
                                <?= $perf ?>%
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function resetFilters() {
    // Preserve current dates, reset everything else
    window.location.href = "?date_from=<?= date('Y-m-01') ?>&date_to=<?= date('Y-m-d') ?>";
}






</script>

<?php
Html::footer();
