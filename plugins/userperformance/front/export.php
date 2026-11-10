<?php
include('../../../inc/includes.php');
Session::checkRight('config', READ);

// Explicitly load the autoloader to ensure PDF libraries are registered
require_once GLPI_ROOT . '/vendor/autoload.php';

global $DB;

$format = $_GET['format'] ?? 'csv';

// --- Rebuild Filters & SQL Query ---
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

$where = ["glpi_tickets.is_deleted = 0"];
$where[] = "DATE(glpi_tickets.date) BETWEEN '{$date_from}' AND '{$date_to}'";
if ($ticket_type !== '') $where[] = "glpi_tickets.type = " . (int)$ticket_type;
if ($status !== '')      $where[] = "glpi_tickets.status = " . (int)$status;
if ($priority !== '')    $where[] = "glpi_tickets.priority = " . (int)$priority;
if ($cat_id !== '')      $where[] = "glpi_tickets.itilcategories_id = " . (int)$cat_id;
if ($tech_id !== '')     $where[] = "EXISTS (SELECT 1 FROM glpi_tickets_users tu WHERE tu.tickets_id = glpi_tickets.id AND tu.users_id = " . (int)$tech_id . " AND tu.type = 2)";
if ($group_id !== '')    $where[] = "EXISTS (SELECT 1 FROM glpi_groups_tickets gt WHERE gt.tickets_id = glpi_tickets.id AND gt.groups_id = " . (int)$group_id . " AND gt.type = 2)";
$where_sql = implode(' AND ', $where);

$select = ""; $join = ""; $group_by_sql = ""; $title_col = "";
if ($group_by === 'tech') {
    $join = "LEFT JOIN glpi_tickets_users tu ON (tu.tickets_id = glpi_tickets.id AND tu.type = 2) LEFT JOIN glpi_users u ON (u.id = tu.users_id)";
    $select = "IFNULL(u.name, 'Unassigned') AS group_name"; $group_by_sql = "GROUP BY tu.users_id, u.name"; $title_col = "Technician";
} elseif ($group_by === 'group') {
    $join = "LEFT JOIN glpi_groups_tickets gt ON (gt.tickets_id = glpi_tickets.id AND gt.type = 2) LEFT JOIN glpi_groups g ON (g.id = gt.groups_id)";
    $select = "IFNULL(g.name, 'No Group') AS group_name"; $group_by_sql = "GROUP BY gt.groups_id, g.name"; $title_col = "Support Group";
} elseif ($group_by === 'category') {
    $join = "LEFT JOIN glpi_itilcategories ic ON (ic.id = glpi_tickets.itilcategories_id)";
    $select = "IFNULL(ic.name, 'No Category') AS group_name"; $group_by_sql = "GROUP BY glpi_tickets.itilcategories_id, ic.name"; $title_col = "Category";
} elseif ($group_by === 'priority') {
    $select = "CASE glpi_tickets.priority WHEN 1 THEN 'Very Low' WHEN 2 THEN 'Low' WHEN 3 THEN 'Medium' WHEN 4 THEN 'High' WHEN 5 THEN 'Very High' ELSE 'Unknown' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.priority"; $title_col = "Priority";
} elseif ($group_by === 'status') {
    $select = "CASE glpi_tickets.status WHEN 1 THEN 'New' WHEN 2 THEN 'Assigned' WHEN 3 THEN 'Planned' WHEN 4 THEN 'Pending' WHEN 5 THEN 'Solved' WHEN 6 THEN 'Closed' ELSE 'Other' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.status"; $title_col = "Status";
} elseif ($group_by === 'type') {
    $select = "CASE glpi_tickets.type WHEN 1 THEN 'Incident' WHEN 2 THEN 'Request' ELSE 'Other' END AS group_name";
    $group_by_sql = "GROUP BY glpi_tickets.type"; $title_col = "Ticket Type";
}

$sql = "SELECT $select, COUNT(glpi_tickets.id) AS total,
            SUM(CASE WHEN glpi_tickets.status = 5 THEN 1 ELSE 0 END) AS solved,
            SUM(CASE WHEN glpi_tickets.status = 6 THEN 1 ELSE 0 END) AS closed,
            SUM(CASE WHEN glpi_tickets.status IN (5,6) THEN 1 ELSE 0 END) AS resolved,
            SUM(CASE WHEN ((glpi_tickets.solvedate IS NOT NULL AND glpi_tickets.solvedate <= glpi_tickets.time_to_resolve) OR (glpi_tickets.closedate IS NOT NULL AND glpi_tickets.closedate <= glpi_tickets.time_to_resolve)) THEN 1 ELSE 0 END) AS sla_compliant,
            SUM(CASE WHEN (glpi_tickets.solvedate IS NOT NULL AND glpi_tickets.solvedate > glpi_tickets.time_to_resolve) OR (glpi_tickets.closedate IS NOT NULL AND glpi_tickets.closedate > glpi_tickets.time_to_resolve) THEN 1 ELSE 0 END) AS late_done,
            SUM(CASE WHEN glpi_tickets.solvedate IS NULL AND glpi_tickets.closedate IS NULL AND NOW() > glpi_tickets.time_to_resolve THEN 1 ELSE 0 END) AS breached_open,
            SUM((SELECT COUNT(*) FROM glpi_itilfollowups f WHERE f.itemtype = 'Ticket' AND f.items_id = glpi_tickets.id)) AS followups_count
        FROM glpi_tickets $join WHERE $where_sql $group_by_sql";

$results = [];
$res = $DB->doQuery($sql);
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $total = (int)$row['total']; $resolved = (int)$row['resolved']; $sla_ok = (int)$row['sla_compliant']; $followups = (int)$row['followups_count'];
        $resolution_rate = $total > 0 ? ($resolved / $total) : 0;
        $sla_rate = $total > 0 ? ($sla_ok / $total) : 0;
        $pending = $total - $resolved;
        $pending_score = $total > 0 ? (1 - ($pending / $total)) : 0;
        $followup_score = $total > 0 ? min(1, ($followups / $total)) : 0;
        $perf = (0.35 * $sla_rate) + (0.30 * $resolution_rate) + (0.10 * $followup_score) + (0.10 * $pending_score);
        
        $row['perf_index'] = round($perf * 100, 1);
        $row['sla_bad'] = (int)$row['late_done'] + (int)$row['breached_open'];
        $results[] = $row;
    }
}

usort($results, function($a, $b) use ($sort_by, $sort_order) {
    $valA = 0; $valB = 0;
    if ($sort_by === 'total') $valA = $a['total']; $valB = $b['total'];
    if ($sort_by === 'perf') { $valA = $a['perf_index']; $valB = $b['perf_index']; }
    if ($sort_by === 'solved') { $valA = $a['solved']; $valB = $b['solved']; }
    if ($sort_by === 'closed') { $valA = $a['closed']; $valB = $b['closed']; }
    if ($sort_by === 'sla_ok') { $valA = $a['sla_compliant']; $valB = $b['sla_compliant']; }
    if ($sort_by === 'sla_bad') { $valA = $a['sla_bad']; $valB = $b['sla_bad']; }
    if ($valA == $valB) return 0;
    return ($sort_order === 'ASC') ? ($valA < $valB ? -1 : 1) : ($valA > $valB ? -1 : 1);
});

$headers = [$title_col, 'Total', 'Solved', 'Closed', 'SLA Non-Compliant', 'SLA Compliant', 'Follow-ups', 'Performance Index'];

// --- 1. CSV EXPORT ---
if ($format === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="kpi_report.csv"');
    $output = fopen('php://output', 'w');
    fputcsv($output, $headers);
    foreach ($results as $row) {
        fputcsv($output, [$row['group_name'], $row['total'], $row['solved'], $row['closed'], $row['sla_bad'], $row['sla_compliant'], $row['followups_count'], $row['perf_index'].'%']);
    }
    fclose($output);
    exit;
}

// --- 2. EXCEL EXPORT (PhpSpreadsheet) ---
if ($format === 'excel') {
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    $col = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($col . '1', $header);
        $sheet->getStyle($col . '1')->getFont()->setBold(true);
        $col++;
    }
    
    $rowNum = 2;
    foreach ($results as $row) {
        $sheet->setCellValue('A'.$rowNum, $row['group_name']);
        $sheet->setCellValue('B'.$rowNum, $row['total']);
        $sheet->setCellValue('C'.$rowNum, $row['solved']);
        $sheet->setCellValue('D'.$rowNum, $row['closed']);
        $sheet->setCellValue('E'.$rowNum, $row['sla_bad']);
        $sheet->setCellValue('F'.$rowNum, $row['sla_compliant']);
        $sheet->setCellValue('G'.$rowNum, $row['followups_count']);
        $sheet->setCellValue('H'.$rowNum, $row['perf_index'].'%');
        $rowNum++;
    }
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="kpi_report.xlsx"');
    header('Cache-Control: max-age=0');
    
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

// --- 3. PDF EXPORT (Using GLPI's Native PDF Wrapper) ---
if ($format === 'pdf') {
    try {
        $html = '<h2 style="font-family:sans-serif;">KPI Report - '.$title_col.'</h2>';
        $html .= '<table border="1" cellpadding="5" cellspacing="0" style="width:100%; font-family:sans-serif; font-size:12px; text-align:center;">';
        $html .= '<thead><tr style="background-color:#206bc4; color:#ffffff;">';
        foreach ($headers as $h) $html .= '<th>'.$h.'</th>';
        $html .= '</tr></thead><tbody>';
        
        foreach ($results as $row) {
            $html .= '<tr>';
            $html .= '<td style="text-align:left;">'.htmlspecialchars($row['group_name']).'</td>';
            $html .= '<td>'.$row['total'].'</td><td>'.$row['solved'].'</td><td>'.$row['closed'].'</td>';
            $html .= '<td>'.$row['sla_bad'].'</td><td>'.$row['sla_compliant'].'</td>';
            $html .= '<td>'.$row['followups_count'].'</td><td><b>'.$row['perf_index'].'%</b></td>';
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        // Try GLPI's native PDF wrapper first
        if (class_exists('Glpi\Application\View\Pdf')) {
            $pdf = new \Glpi\Application\View\Pdf();
            $pdf->writeHTML($html);
            $pdf->Output('kpi_report.pdf', 'D');
            exit;
        } 
        // Fallback to Mpdf
        else if (class_exists('\Mpdf\Mpdf')) {
            $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'tempDir' => GLPI_TMP_DIR]);
            $mpdf->WriteHTML($html);
            $mpdf->Output('kpi_report.pdf', 'D');
            exit;
        }
        // Fallback to TCPDF
        else if (class_exists('\TCPDF')) {
            $pdf = new \TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetPrintHeader(false);
            $pdf->SetPrintFooter(false);
            $pdf->SetMargins(10, 10, 10);
            $pdf->AddPage();
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('kpi_report.pdf', 'D');
            exit;
        } 
        else {
            throw new \Exception("No PDF library found. Please check your GLPI vendor folder.");
        }
    } catch (\Throwable $e) {
        header('Content-Type: text/plain');
        echo "PDF EXPORT FAILED\n\n";
        echo "Error: " . $e->getMessage() . "\n";
    }
    exit;
}
