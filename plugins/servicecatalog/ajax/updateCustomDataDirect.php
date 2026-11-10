<?php
header('Content-Type: application/json');

try {
    $ticketId = (int)($_POST['ticket_id'] ?? 0);
    $teamId = (int)($_POST['team_id'] ?? 0);
    $catId = (int)($_POST['cat_id'] ?? 0);
    $typeId = (int)($_POST['type_id'] ?? 0);
    $itemId = (int)($_POST['item_id'] ?? 0);
    $customData = $_POST['custom_data'] ?? '';

    if ($ticketId <= 0) {
        echo json_encode(['success' => false, 'error' => 'Invalid ticket ID']);
        exit;
    }

    $config_file = dirname(__DIR__, 3) . '/config/config_db.php';
    if (!file_exists($config_file)) {
        echo json_encode(['success' => false, 'error' => 'Config file not found']);
        exit;
    }
    
    if (!class_exists('DBmysql')) {
        class DBmysql {}
    }
    
    include($config_file);
    
    if (class_exists('DB')) {
        $db = new DB();
        $dbhost = $db->dbhost;
        $dbuser = $db->dbuser;
        $dbpassword = $db->dbpassword;
        $dbdefault = $db->dbdefault;
    }
    
    if (!isset($dbhost) || !$dbhost) {
        $dbhost = 'localhost';
        $dbuser = 'glpi';
        $dbpassword = 'glpi';
        $dbdefault = 'glpi';
    }

    $mysqli = @new mysqli($dbhost, $dbuser, $dbpassword, $dbdefault);
    if ($mysqli->connect_error) {
        echo json_encode(['success' => false, 'error' => 'DB Connection failed: ' . $mysqli->connect_error]);
        exit;
    }

    $stmt = $mysqli->prepare("SELECT id FROM glpi_plugin_servicecatalog_ticketservices WHERE tickets_id = ?");
    $stmt->bind_param("i", $ticketId);
    $stmt->execute();
    $stmt->store_result();
    $exists = $stmt->num_rows > 0;
    $stmt->close();

    if ($exists) {
        $stmt = $mysqli->prepare("UPDATE glpi_plugin_servicecatalog_ticketservices SET teams_id = ?, categories_id = ?, types_id = ?, items_id = ?, custom_data = ? WHERE tickets_id = ?");
        $stmt->bind_param("iiiisi", $teamId, $catId, $typeId, $itemId, $customData, $ticketId);
    } else {
        $stmt = $mysqli->prepare("INSERT INTO glpi_plugin_servicecatalog_ticketservices (tickets_id, teams_id, categories_id, types_id, items_id, custom_data) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiss", $ticketId, $teamId, $catId, $typeId, $itemId, $customData);
    }

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'SQL Error: ' . $stmt->error]);
    }
    $stmt->close();
    $mysqli->close();

} catch (\Throwable $e) {
    echo json_encode(['success' => false, 'error' => 'Exception: ' . $e->getMessage()]);
}
