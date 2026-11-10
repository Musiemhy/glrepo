<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: application/json; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) { $DB = new DB(); $DB->connect(); }

$id = (int)($_GET['types_id'] ?? 0);
$form_type = (int)($_GET['form_type'] ?? 1);

$where = ['types_id' => $id, 'is_active' => 1];
if ($form_type === 1) $where['is_incident'] = 1;
if ($form_type === 2) $where['is_request'] = 1;

$rows = [];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => $where, 'ORDER' => 'name']) as $r) {
    // Ensure custom_fields is always a valid JSON array string
    $cf = $r['custom_fields'] ?? '[]';
    if (empty($cf) || $cf === 'null' || $cf === '""') {
        $cf = '[]';
    }
    
    $rows[] = [
        'id' => (int)$r['id'], 
        'name' => (string)$r['name'],
        'itilcategories_id' => (int)($r['itilcategories_id'] ?? 0),
        'custom_fields' => $cf,
        'forms_id' => (int)($r['forms_id'] ?? 0)
    ];
}
echo json_encode($rows);
