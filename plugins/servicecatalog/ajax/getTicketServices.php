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

$id = (int)($_GET['id'] ?? 0);
if (!$id) { echo json_encode(['items_id' => 0]); exit; }

$result = [
    'current' => ['team_id' => 0, 'cat_id' => 0, 'type_id' => 0, 'item_id' => 0],
    'teams' => [], 'categories' => [], 'types' => [], 'items' => [],
    'custom_fields' => '[]', 'custom_data' => '{}'
];

foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_ticketservices', 'WHERE' => ['tickets_id' => $id]]) as $row) {
    $result['current'] = [
        'team_id' => (int)$row['teams_id'],
        'cat_id'  => (int)$row['categories_id'],
        'type_id' => (int)$row['types_id'],
        'item_id' => (int)$row['items_id']
    ];
    $result['custom_data'] = $row['custom_data'] ?? '{}';
    
    if ($result['current']['item_id'] > 0) {
        $item = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['id' => $result['current']['item_id']]])->current();
        if ($item) $result['custom_fields'] = $item['custom_fields'] ?? '[]';
    }
    break;
}

foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_teams', 'WHERE' => ['is_active' => 1]]) as $r) $result['teams'][] = ['id' => (int)$r['id'], 'name' => $r['name']];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_categories', 'WHERE' => ['is_active' => 1]]) as $r) $result['categories'][] = ['id' => (int)$r['id'], 'name' => $r['name'], 'teams_id' => (int)$r['teams_id']];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_types', 'WHERE' => ['is_active' => 1]]) as $r) $result['types'][] = ['id' => (int)$r['id'], 'name' => $r['name'], 'categories_id' => (int)$r['categories_id']];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['is_active' => 1]]) as $r) $result['items'][] = ['id' => (int)$r['id'], 'name' => $r['name'], 'types_id' => (int)$r['types_id']];

echo json_encode($result);
