<?php
include(__DIR__ . '/../../../inc/includes.php');
Html::header(__('Service Types', 'servicecatalog'), $_SERVER['PHP_SELF'], 'tools', 'none');
require_once __DIR__ . '/navigation.php';
servicecatalog_render_navigation('types');

global $DB;
$msg = '';

function render_vis_fields($row = []) {
    $opts = [1 => 'Yes', 0 => 'No'];
    $html = '<div class="row mb-2">';
    foreach (['is_incident' => 'Visible for an incident', 'is_request' => 'Visible for a request', 'is_problem' => 'Visible for a problem', 'is_change' => 'Visible for a change'] as $key => $label) {
        $val = $row[$key] ?? 1;
        $html .= '<div class="col-md-3"><label>' . __($label) . '</label><select name="'.$key.'" class="form-select">';
        foreach ($opts as $v => $txt) {
            $sel = ($val == $v) ? 'selected' : '';
            $html .= "<option value='{$v}' {$sel}>{$txt}</option>";
        }
        $html .= '</select></div>';
    }
    $html .= '</div>';
    return $html;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $action = $_POST['action'] ?? '';
    $id = (int)($_POST['id'] ?? 0);
    $vis = [
        'is_incident' => isset($_POST['is_incident']) ? (int)$_POST['is_incident'] : 1,
        'is_request'  => isset($_POST['is_request']) ? (int)$_POST['is_request'] : 1,
        'is_problem'  => isset($_POST['is_problem']) ? (int)$_POST['is_problem'] : 1,
        'is_change'   => isset($_POST['is_change']) ? (int)$_POST['is_change'] : 1,
    ];

    if ($action === 'add_type') {
        $DB->insert('glpi_plugin_servicecatalog_types', array_merge(['name' => $_POST['name'], 'categories_id' => (int)$_POST['categories_id'], 'is_active' => 1], $vis)); $msg = 'Type added.';
    } elseif ($action === 'update_type') {
        $DB->update('glpi_plugin_servicecatalog_types', array_merge(['name' => $_POST['name'], 'categories_id' => (int)$_POST['categories_id']], $vis), ['id' => $id]); $msg = 'Type updated.';
    } elseif ($action === 'delete_type') {
        $DB->delete('glpi_plugin_servicecatalog_types', ['id' => $id]); $msg = 'Type deleted.';
    }
    echo '<div class="alert alert-success">' . $msg . '</div>';
}

echo '<div class="container-fluid">';
$csrf = "<input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"" . Session::getNewCSRFToken() . "\">";
$cats = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_categories']) as $c) { $cats[$c['id']] = $c['name']; }

echo '<div class="card mb-4"><div class="card-header"><h3>Add Type</h3></div><div class="card-body">';
echo '<form method="post">' . $csrf . '<input type="hidden" name="action" value="add_type">';
echo '<input type="text" name="name" class="form-control mb-2" placeholder="Type Name" required>';
echo '<select name="categories_id" class="form-select mb-3" required><option value="">Select Category</option>';
foreach($cats as $id => $name) { echo '<option value="'.$id.'">'.htmlspecialchars($name).'</option>'; }
echo '</select>';
echo render_vis_fields();
echo '<button type="submit" class="btn btn-primary mt-2">Add Type</button></form></div></div>';

echo '<div class="card"><div class="card-header"><h3>Existing Types</h3></div><div class="card-body"><table class="table table-hover"><tr><th>ID</th><th>Category</th><th>Name</th><th>Actions</th></tr>';
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_types', 'ORDER' => 'name']) as $t) {
    echo '<tr><td>' . $t['id'] . '</td><td>' . htmlspecialchars($cats[$t['categories_id']] ?? 'Unknown') . '</td><td>' . htmlspecialchars($t['name']) . '</td>';
    echo '<td><details><summary class="btn btn-sm btn-primary">Edit</summary><div class="border p-2 mt-2">';
    echo '<form method="post">' . $csrf . '<input type="hidden" name="action" value="update_type"><input type="hidden" name="id" value="' . $t['id'] . '">';
    echo '<input type="text" name="name" class="form-control mb-2" value="' . htmlspecialchars($t['name']) . '" required>';
    echo '<select name="categories_id" class="form-select mb-2" required>';
    foreach($cats as $id => $name) { echo '<option value="'.$id.'" ' . ($t['categories_id']==$id?'selected':'') . '>'.htmlspecialchars($name).'</option>'; }
    echo '</select>';
    echo render_vis_fields($t);
    echo '<button type="submit" class="btn btn-sm btn-primary mt-2">Save</button></form></div></details> ';
    echo '<form method="post" style="display:inline-block">' . $csrf . '<input type="hidden" name="action" value="delete_type"><input type="hidden" name="id" value="' . $t['id'] . '"><button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Delete?\')">Delete</button></form></td></tr>';
}
echo '</table></div></div></div>';
Html::footer();
