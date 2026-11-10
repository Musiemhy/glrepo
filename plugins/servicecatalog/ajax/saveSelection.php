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

if (session_status() === PHP_SESSION_NONE) { @session_start(); }
$users_id = $_SESSION['glpiID'] ?? 0;
if (!$users_id) { die(json_encode(['error' => 'Not logged in'])); }

$data = [
    'users_id'      => $users_id,
    'teams_id'      => (int)($_POST['team'] ?? 0),
    'categories_id' => (int)($_POST['cat'] ?? 0),
    'types_id'      => (int)($_POST['type'] ?? 0),
    'items_id'      => (int)($_POST['item'] ?? 0),
    'custom_data'   => json_encode($_POST['custom'] ?? [])
];

$existing = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_pending', 'WHERE' => ['users_id' => $users_id]])->current();
if ($existing) {
    $DB->update('glpi_plugin_servicecatalog_pending', $data, ['users_id' => $users_id]);
} else {
    $DB->insert('glpi_plugin_servicecatalog_pending', $data);
}
echo json_encode(['success' => true]);
