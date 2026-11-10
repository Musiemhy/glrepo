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

$itemtype = $_GET['itemtype'] ?? '';
if (empty($itemtype) || !class_exists($itemtype)) {
    echo json_encode(['error' => 'Invalid itemtype: ' . $itemtype]);
    exit;
}

try {
    $table = $itemtype::getTable();
    if (!$DB->tableExists($table)) {
        echo json_encode(['error' => 'Table not found: ' . $table]);
        exit;
    }

    $options = [];
    // Use $DB->request which is the native GLPI way and avoids SQL errors
    foreach ($DB->request(['FROM' => $table, 'LIMIT' => 300]) as $row) {
        $name = $row['name'] ?? '';
        if (empty($name) && isset($row['realname'])) $name = trim($row['realname'] . ' ' . ($row['firstname'] ?? ''));
        if (empty($name) && isset($row['completename'])) $name = $row['completename'];
        if (empty($name)) $name = "ID: " . $row['id'];
        
        $options[] = ['id' => (int)$row['id'], 'name' => (string)$name];
    }
    
    if (empty($options)) {
        // If empty, output diagnostic info
        $count = count($DB->request(['FROM' => $table]));
        echo json_encode([
            'error' => 'No options generated', 
            'table' => $table,
            'total_rows_in_table' => $count,
            'message' => 'If total_rows_in_table is 0, your GLPI database is empty for this object.'
        ]);
    } else {
        echo json_encode($options);
    }
} catch (\Throwable $e) {
    echo json_encode(['error' => 'Exception: ' . $e->getMessage()]);
}
