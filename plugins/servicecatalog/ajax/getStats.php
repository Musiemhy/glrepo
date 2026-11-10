<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';

header('Content-Type: application/json; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) {
    if (!class_exists('DB')) { require GLPI_CONFIG_DIR . '/config_db.php'; }
    $DB = new DB();
    $DB->connect();
}

$type = (int)($_GET['type'] ?? 1); // 1=Incident, 2=Request

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

echo json_encode([
    'total' => $total,
    'incoming' => $stats[1],
    'pending' => $stats[4],
    'assigned' => $stats[2]
]);
