<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: application/json; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) {
    if (!class_exists('DB')) { require GLPI_CONFIG_DIR . '/config_db.php'; }
    $DB = new DB();
    $DB->connect();
}

$ticket_id = (int)($_POST['ticket_id'] ?? 0);
$item_id = (int)($_POST['item_id'] ?? 0);
$team_id = (int)($_POST['team_id'] ?? 0);
$cat_id = (int)($_POST['cat_id'] ?? 0);
$type_id = (int)($_POST['type_id'] ?? 0);
$custom_data = $_POST['custom_data'] ?? null;

if ($ticket_id > 0) {
    $existing = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_ticketservices', 'WHERE' => ['tickets_id' => $ticket_id]])->current();
    
    $dataToSave = [
        'teams_id' => $team_id,
        'categories_id' => $cat_id,
        'types_id' => $type_id,
        'items_id' => $item_id
    ];
    
    if ($custom_data !== null) {
        $dataToSave['custom_data'] = $custom_data;
    }

    if ($existing) {
        $DB->update('glpi_plugin_servicecatalog_ticketservices', $dataToSave, ['tickets_id' => $ticket_id]);
    } else {
        $dataToSave['tickets_id'] = $ticket_id;
        $DB->insert('glpi_plugin_servicecatalog_ticketservices', $dataToSave);
    }

    // Auto-update native ITIL Category
    $itil_id = 0;
    if ($item_id > 0) {
        $item = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['id' => $item_id]])->current();
        $itil_id = $item ? (int)$item['itilcategories_id'] : 0;
    }
    
    if ($itil_id > 0) {
        $DB->update('glpi_tickets', ['itilcategories_id' => $itil_id], ['id' => $ticket_id]);
    }
    
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
