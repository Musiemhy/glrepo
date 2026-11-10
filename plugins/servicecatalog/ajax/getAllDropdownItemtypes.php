<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: application/json; charset=utf-8');

// Get GLPI's standard items
$types = \Dropdown::getStandardDropdownItemTypes();

// Add a hardcoded fallback for the most important ones in case GLPI's function fails or is empty
if (empty($types) || !is_array($types)) {
    $types = [];
}

// Force merge important itemtypes to ensure they are always there
$types['Assistance'] = array_unique(array_merge($types['Assistance'] ?? [], [
    'User', 'Group', 'Location', 'ITILCategory', 'RequestType', 'SolutionType'
]));
$types['Assets'] = array_unique(array_merge($types['Assets'] ?? [], [
    'Computer', 'Monitor', 'Printer', 'NetworkEquipment', 'Software', 'SoftwareVersion'
]));
$types['Management'] = array_unique(array_merge($types['Management'] ?? [], [
    'Supplier', 'Contact', 'Contract', 'DocumentType'
]));

echo json_encode($types);
