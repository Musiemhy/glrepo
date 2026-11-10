<?php
include('../../../inc/includes.php');

$type = 1; // 1 = Incident

$_GET['itemtype'] = 'Ticket';
$_GET['reset']    = 'reset';
$_GET['criteria'] = [
    0 => [ 'field' => 14, 'searchtype' => 'equals', 'value' => $type, 'link' => 'AND' ]
];

// Fetch real counts from the database
global $DB;
$stats = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
$total = 0;
foreach ($DB->request([
    'SELECT' => ['status', 'COUNT' => 'id AS c'],
    'FROM'   => 'glpi_tickets',
    'WHERE'  => ['type' => $type, 'is_deleted' => 0],
    'GROUPBY'=> 'status'
]) as $row) {
    if (isset($stats[$row['status']])) {
        $stats[$row['status']] += $row['c'];
        $total += $row['c'];
    }
}

Html::header(__('Incidents', 'servicecatalog'), $_SERVER['REQUEST_URI'], 'helpdesk', 'Ticket');
?>
<div class="container-fluid mt-3 mb-3">
    <div class="btn-group shadow-sm" role="group">
        <a href="?page=incidents" class="btn btn-danger fw-bold active">
            <i class="ti ti-alert-triangle me-1"></i> <?= __('Incidents', 'servicecatalog') ?>
        </a>
        <a href="?page=requests" class="btn btn-white text-success border border-success">
            <i class="ti ti-help-circle me-1"></i> <?= __('Requests', 'servicecatalog') ?>
        </a>
    </div>
</div>

<div class="row row-deck row-cards mb-3 sc-custom-stats">
    <div class="col-sm-6 col-lg-3">
        <div class="card bg-yellow-lt">
            <div class="card-body">
                <div class="subheader text-yellow">Tickets</div>
                <div class="h1 m-0 text-yellow"><?= $total ?></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card bg-green-lt">
            <div class="card-body">
                <div class="subheader text-green">Incoming tickets</div>
                <div class="h1 m-0 text-green"><?= $stats[1] ?></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card bg-orange-lt">
            <div class="card-body">
                <div class="subheader text-orange">Pending tickets</div>
                <div class="h1 m-0 text-orange"><?= $stats[4] ?></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card bg-blue-lt">
            <div class="card-body">
                <div class="subheader text-blue">Assigned tickets</div>
                <div class="h1 m-0 text-blue"><?= $stats[2] ?></div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-body > .row-deck:not(.sc-custom-stats), .page-body > .row-cards:not(.sc-custom-stats) { display: none !important; }
</style>
<?php
Search::show('Ticket');
Html::footer();
