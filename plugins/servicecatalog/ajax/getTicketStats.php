<?php
include ('../../../inc/includes.php');
header('Content-Type: application/json');

if (!Session::getLoginUserID()) {
    echo json_encode([]);
    exit;
}

global $DB;
$type = (int)($_GET['type'] ?? 1); // 1 = Incident, 2 = Request

// Get status IDs dynamically
$statuses = [];
foreach ($DB->request(['FROM' => 'glpi_states']) as $row) {
    $statuses[$row['name']] = $row['id'];
}

$stats = [
    'total' => 0,
    'incoming' => 0,
    'pending' => 0,
    'assigned' => 0,
    'planned' => 0,
    'solved' => 0,
    'closed' => 0
];

$query = [
    'FROM' => 'glpi_tickets',
    'WHERE' => [
        'is_deleted' => 0,
        'type' => $type
    ]
];

foreach ($DB->request($query) as $row) {
    $stats['total']++;
    
    $s = $row['status'];
    if ($s == 1) $stats['incoming']++;
    elseif ($s == 2 || $s == 3 || $s == 4) $stats['pending']++; // Assigned/Planned goes to pending if needed
    elseif ($s == 4) $stats['assigned']++;
    elseif ($s == 5) $stats['solved']++;
    elseif ($s == 6) $stats['closed']++;
    
    if ($s == 4) $stats['planned']++; // Just an example mapping
    if ($s == 2 || $s == 3 || $s == 4) $stats['assigned']++;
}

echo json_encode($stats);
