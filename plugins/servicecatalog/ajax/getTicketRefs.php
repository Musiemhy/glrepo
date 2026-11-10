<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: application/json; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) {
    if (!class_exists('DB')) { require GLPI_CONFIG_DIR . '/config_db.php'; }
    $DB = new DB(); $DB->connect();
}

$ids = $_GET['ids'] ?? [];
if (!is_array($ids)) $ids = [$ids];
$refs = [];

foreach ($ids as $id) {
    $id = (int)$id;
    if ($id <= 0) continue;

    $row = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_ticket_refs', 'WHERE' => ['tickets_id' => $id]])->current();
    if ($row) {
        $refs[$id] = $row['custom_ref'];
    }
}
echo json_encode($refs);
