<?php
header('Content-Type: application/json');

try {
    $ticketId = (int)($_GET['tickets_id'] ?? 0);
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
        $dbhost = 'localhost'; $dbuser = 'glpi'; $dbpassword = 'glpi'; $dbdefault = 'glpi';
    }

    $mysqli = @new mysqli($dbhost, $dbuser, $dbpassword, $dbdefault);
    if ($mysqli->connect_error) {
        echo json_encode(['success' => false, 'error' => 'DB Connection failed']);
        exit;
    }

    $stmt = $mysqli->prepare("SELECT teams_id, categories_id, types_id, items_id, custom_data FROM glpi_plugin_servicecatalog_ticketservices WHERE tickets_id = ?");
    $stmt->bind_param("i", $ticketId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    $mysqli->close();

    if ($row) {
        echo json_encode(['success' => true, 'current' => $row]);
    } else {
        echo json_encode(['success' => false, 'error' => 'No mapping found']);
    }

} catch (\Throwable $e) {
    echo json_encode(['success' => false, 'error' => 'Exception: ' . $e->getMessage()]);
}
