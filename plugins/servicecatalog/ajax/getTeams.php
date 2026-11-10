<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: application/json; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) { $DB = new DB(); $DB->connect(); }

$type = (int)($_GET['ticket_type'] ?? 1);
$where = ['is_active' => 1];
if ($type === 1) $where['is_incident'] = 1;
if ($type === 2) $where['is_request'] = 1;

$rows = [];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_teams', 'WHERE' => $where, 'ORDER' => 'name']) as $r) {
    $rows[] = ['id' => (int)$r['id'], 'name' => (string)$r['name']];
}
echo json_encode($rows);
