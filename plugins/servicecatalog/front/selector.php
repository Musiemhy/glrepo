<?php
include(__DIR__ . '/../../../inc/includes.php');
Html::header(__('Service Catalog', 'servicecatalog'), $_SERVER['PHP_SELF'], 'tools', 'none');
require_once __DIR__ . '/navigation.php';
servicecatalog_render_navigation('selector');

global $DB;
$msg = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $action = $_POST['action'] ?? '';
    $id = (int)($_POST['id'] ?? 0);
    if ($action === 'add_team') { $DB->insert('glpi_plugin_servicecatalog_teams', ['name' => $_POST['name'], 'is_active' => 1]); $msg = 'Team added.'; }
    elseif ($action === 'update_team') { $DB->update('glpi_plugin_servicecatalog_teams', ['name' => $_POST['name']], ['id' => $id]); $msg = 'Team updated.'; }
    elseif ($action === 'delete_team') { $DB->delete('glpi_plugin_servicecatalog_teams', ['id' => $id]); $msg = 'Team deleted.'; }
    elseif ($action === 'add_category') { $DB->insert('glpi_plugin_servicecatalog_categories', ['name' => $_POST['name'], 'teams_id' => (int)$_POST['teams_id'], 'is_active' => 1]); $msg = 'Category added.'; }
    elseif ($action === 'update_category') { $DB->update('glpi_plugin_servicecatalog_categories', ['name' => $_POST['name'], 'teams_id' => (int)$_POST['teams_id']], ['id' => $id]); $msg = 'Category updated.'; }
    elseif ($action === 'delete_category') { $DB->delete('glpi_plugin_servicecatalog_categories', ['id' => $id]); $msg = 'Category deleted.'; }
    elseif ($action === 'add_type') { $DB->insert('glpi_plugin_servicecatalog_types', ['name' => $_POST['name'], 'categories_id' => (int)$_POST['categories_id'], 'is_active' => 1]); $msg = 'Type added.'; }
    elseif ($action === 'update_type') { $DB->update('glpi_plugin_servicecatalog_types', ['name' => $_POST['name'], 'categories_id' => (int)$_POST['categories_id']], ['id' => $id]); $msg = 'Type updated.'; }
    elseif ($action === 'delete_type') { $DB->delete('glpi_plugin_servicecatalog_types', ['id' => $id]); $msg = 'Type deleted.'; }
    elseif ($action === 'add_item') { $DB->insert('glpi_plugin_servicecatalog_items', ['name' => $_POST['name'], 'types_id' => (int)$_POST['types_id'], 'itilcategories_id' => (int)$_POST['itilcategories_id'], 'is_active' => 1]); $msg = 'Item added.'; }
    elseif ($action === 'update_item') { $DB->update('glpi_plugin_servicecatalog_items', ['name' => $_POST['name'], 'types_id' => (int)$_POST['types_id'], 'itilcategories_id' => (int)$_POST['itilcategories_id']], ['id' => $id]); $msg = 'Item updated.'; }
    elseif ($action === 'delete_item') { $DB->delete('glpi_plugin_servicecatalog_items', ['id' => $id]); $msg = 'Item deleted.'; }
    echo '<div class="alert alert-success">' . $msg . '</div>';
}
echo '<div class="container-fluid">';
$csrf = "<input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"" . Session::getNewCSRFToken() . "\">";

echo '<div class="card"><div class="card-header"><h3>Self-Service Ticket Form</h3></div><div class="card-body">';
echo '<p>This is the user-facing self-service form.</p>';
echo '</div></div>';
echo '</div>';
Html::footer();
