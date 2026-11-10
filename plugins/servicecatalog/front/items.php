<?php
include(__DIR__ . '/../../../inc/includes.php');
Html::header(__('Service Items', 'servicecatalog'), $_SERVER['PHP_SELF'], 'tools', 'none');
require_once __DIR__ . '/navigation.php';
servicecatalog_render_navigation('items');

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

    if ($action === 'add_item') {
        $DB->insert('glpi_plugin_servicecatalog_items', array_merge(['name' => $_POST['name'], 'types_id' => (int)$_POST['types_id'], 'itilcategories_id' => (int)$_POST['itilcategories_id'], 'custom_fields' => $_POST['custom_fields'], 'forms_id' => (int)$_POST['forms_id'], 'is_active' => 1], $vis)); $msg = 'Item added.';
    } elseif ($action === 'update_item') {
        $DB->update('glpi_plugin_servicecatalog_items', array_merge(['name' => $_POST['name'], 'types_id' => (int)$_POST['types_id'], 'itilcategories_id' => (int)$_POST['itilcategories_id'], 'custom_fields' => $_POST['custom_fields'], 'forms_id' => (int)$_POST['forms_id']], $vis), ['id' => $id]); $msg = 'Item updated.';
    } elseif ($action === 'delete_item') {
        $DB->delete('glpi_plugin_servicecatalog_items', ['id' => $id]); $msg = 'Item deleted.';
    }
    echo '<div class="alert alert-success">' . $msg . '</div>';
}

echo '<div class="container-fluid">';
$csrf = "<input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"" . Session::getNewCSRFToken() . "\">";
$types = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_types']) as $t) { $types[$t['id']] = $t['name']; }
$itils = []; foreach ($DB->request(['FROM' => 'glpi_itilcategories']) as $i) { $itils[$i['id']] = $i['name']; }
$forms = []; foreach ($DB->request(['FROM' => 'glpi_forms_forms']) as $f) { $forms[$f['id']] = $f['name']; }
$forms = []; foreach ($DB->request(['FROM' => 'glpi_forms_forms']) as $f) { $forms[$f['id']] = $f['name']; }

function render_custom_fields_ui($jsonStr, $prefix) {
    $html = "<div id='cf-container-{$prefix}' class='mb-3 p-3 border rounded bg-light'>";
    $html .= "<h5 class='mb-3'>Custom Fields Builder</h5>";
    $html .= "<div id='cf-rows-{$prefix}' class='mb-2'></div>";
    $html .= "<button type='button' class='btn btn-sm btn-primary' onclick='addCfRow(\"{$prefix}\")'><i class='ti ti-plus'></i> Add Main Field</button>";
    $html .= "<input type='hidden' name='custom_fields' id='cf-json-{$prefix}' value='" . htmlspecialchars($jsonStr ?: '[]') . "'>";
    $html .= "</div>";
    $html .= "<script>
    document.addEventListener('DOMContentLoaded', function() {
        let existing = [];
        try { existing = JSON.parse(document.getElementById('cf-json-{$prefix}').value); } catch(e){}
        if (Array.isArray(existing)) {
            existing.forEach(f => { addCfRow('{$prefix}', f); });
        }
    });
    </script>";
    return $html;
}
?>

<div class="modal fade" id="sc-subfield-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Configure Sub-Field</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="sf-option-val">
        <input type="hidden" id="sf-parent-row-id">
        <div class="mb-2"><label>Label</label><input type="text" id="sf-label" class="form-control"></div>
        <div class="mb-2"><label>Name</label><input type="text" id="sf-name" class="form-control"></div>
        <div class="mb-2"><label>Type</label>
            <select id="sf-type" class="form-select" onchange="toggleSfOptions()">
                <option value="text">Text</option>
                <option value="number">Number</option>
                <option value="email">Email</option>
                <option value="tel">Phone</option>
                <option value="date">Date</option>
                <option value="time">Time</option>
                <option value="datetime-local">Date & Time</option>
                <option value="readonly">Read-only Instruction</option>
                <option value="custom_select">Custom Dropdown</option>
                <option value="glpi_dropdown">GLPI Object (Dropdown)</option>
            </select>
        </div>
        <div class="mb-2" id="sf-options-wrap" style="display:none;">
            <label>Options (comma separated)</label>
            <input type="text" id="sf-options" class="form-control">
        </div>
        <div class="mb-2" id="sf-itemtype-wrap" style="display:none;">
            <label>GLPI Object</label>
            <select id="sf-itemtype" class="form-select"></select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="saveSubField()">Add Field</button>
      </div>
    </div>
  </div>
</div>

<script>
const allGlpiDropdowns = {
    "Assistance": ["User", "Group", "Location", "ITILCategory", "RequestType", "SolutionType", "RequestSource", "PendingReason", "TaskCategory"],
    "Setup / Dropdowns": ["UserTitle", "UserCategory", "State", "Profile", "Manufacturer", "OperatingSystem", "OperatingSystemVersion", "OperatingSystemArchitecture", "Network", "Vlan", "DocumentType", "DocumentCategory"],
    "Assets": ["Computer", "Monitor", "Printer", "NetworkEquipment", "Phone", "Peripheral", "Software", "SoftwareVersion", "SoftwareLicense", "ConsumableItem", "CartridgeItem", "Rack", "Enclosure", "PDU"],
    "Management": ["Supplier", "Contact", "Contract", "Document", "Budget", "BudgetType", "SupplierType", "ContactType", "ContractType"]
};

document.addEventListener('DOMContentLoaded', function() {
    const sel = document.getElementById('sf-itemtype');
    if (!sel) return;
    sel.innerHTML = '<option value="">— Select GLPI Object —</option>';
    for (const category in allGlpiDropdowns) {
        const optgroup = document.createElement('optgroup');
        optgroup.label = category;
        allGlpiDropdowns[category].forEach(it => { optgroup.appendChild(new Option(it, it)); });
        sel.appendChild(optgroup);
    }
});

function toggleSfOptions() {
    const type = document.getElementById('sf-type').value;
    document.getElementById('sf-itemtype-wrap').style.display = type === 'glpi_dropdown' ? 'block' : 'none';
    document.getElementById('sf-options-wrap').style.display = type === 'custom_select' ? 'block' : 'none';
}

function addCfRow(prefix, data = {}) {
    const container = document.getElementById('cf-rows-' + prefix);
    const rowId = 'cfrow_' + Math.random().toString(36).substr(2, 9);
    
    let label = data.label || '', name = data.name || '', type = data.type || 'text';
    let options = data.options || [], conditions = data.conditions || {}, value = data.value || '';

    const row = document.createElement('div');
    row.className = 'card mb-3 cf-row';
    row.id = rowId;
    row.dataset.type = type;
    
    row.innerHTML = `
        <div class="card-body p-2 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="m-0 font-weight-bold">Main Field</h6>
                <button type="button" class="btn btn-sm btn-danger" onclick="this.closest('.cf-row').remove()"><i class="ti ti-trash"></i></button>
            </div>
            <div class="row g-2">
                <div class="col-md-4"><input type="text" class="form-control cf-label" placeholder="Label" value="${label}" required></div>
                <div class="col-md-4"><input type="text" class="form-control cf-name" placeholder="Name" value="${name}" required></div>
                <div class="col-md-4">
                    <select class="form-select cf-type" onchange="changeMainType(this)">
                        <option value="text" ${type==='text'?'selected':''}>Text</option>
                        <option value="number" ${type==='number'?'selected':''}>Number</option>
                        <option value="email" ${type==='email'?'selected':''}>Email</option>
                        <option value="tel" ${type==='tel'?'selected':''}>Phone</option>
                        <option value="date" ${type==='date'?'selected':''}>Date</option>
                        <option value="time" ${type==='time'?'selected':''}>Time</option>
                        <option value="datetime-local" ${type==='datetime-local'?'selected':''}>Date & Time</option>
                        <option value="readonly" ${type==='readonly'?'selected':''}>Read-only Information</option>
                        <option value="glpi_dropdown" ${type==='glpi_dropdown'?'selected':''}>GLPI Object</option>
                        <option value="advanced_select" ${type==='advanced_select'?'selected':''}>Advanced Select (Conditional)</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="form-select cf-itemtype" style="display:${type==='glpi_dropdown'?'block':'none'}">
                        <option value="">Select...</option>
                    </select>
                </div>
                <div class="col-12 cf-options-wrap" style="display:${type==='advanced_select'?'block':'none'}">
                    <label>Options (comma separated)</label>
                    <input type="text" class="form-control cf-options" value="${options.join(',')}">
                </div>
                <div class="col-12 cf-val-wrap" style="display:${type==='readonly'?'block':'none'}">
                    <label>Read-only Text</label>
                    <input type="text" class="form-control cf-value" value="${value}">
                </div>
                <div class="col-12 cf-cond-wrap mt-3" style="display:${type==='advanced_select'?'block':'none'}">
                    <label>Conditional Sub-fields</label>
                    <div class="cf-subfields-list mb-2"></div>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="openSubFieldModal('${rowId}')"><i class="ti ti-plus"></i> Add Conditional Field</button>
                </div>
            </div>
        </div>
    `;
    
    container.appendChild(row);
    
    // Populate GLPI Objects for this row
    const iSel = row.querySelector('.cf-itemtype');
    if (type === 'glpi_dropdown') {
        for (const category in allGlpiDropdowns) {
            const optgroup = document.createElement('optgroup');
            optgroup.label = category;
            allGlpiDropdowns[category].forEach(it => { optgroup.appendChild(new Option(it, it, false, it === data.itemtype)); });
            iSel.appendChild(optgroup);
        }
    }

    // Render any existing conditional subfields
    if (type === 'advanced_select' && Object.keys(conditions).length > 0) {
        const subList = row.querySelector('.cf-subfields-list');
        for (const optVal in conditions) {
            conditions[optVal].forEach(sub => { addSubFieldUI(subList, optVal, sub); });
        }
    }
}

function changeMainType(sel) {
    const row = sel.closest('.cf-row');
    const type = sel.value;
    row.dataset.type = type;
    row.querySelector('.cf-options-wrap').style.display = type === 'advanced_select' ? 'block' : 'none';
    row.querySelector('.cf-val-wrap').style.display = type === 'readonly' ? 'block' : 'none';
    row.querySelector('.cf-itemtype').style.display = type === 'glpi_dropdown' ? 'block' : 'none';
    row.querySelector('.cf-cond-wrap').style.display = type === 'advanced_select' ? 'block' : 'none';

    // Dynamically populate the GLPI Object list if it's empty
    if (type === 'glpi_dropdown') {
        const iSel = row.querySelector('.cf-itemtype');
        if (iSel.options.length <= 1) {
            for (const category in allGlpiDropdowns) {
                const optgroup = document.createElement('optgroup');
                optgroup.label = category;
                allGlpiDropdowns[category].forEach(it => { optgroup.appendChild(new Option(it, it)); });
                iSel.appendChild(optgroup);
            }
        }
    }
}

function openSubFieldModal(rowId) {
    const row = document.getElementById(rowId);
    const optsStr = row.querySelector('.cf-options').value;
    if (!optsStr.trim()) { alert('Please enter Options first.'); return; }
    const opts = optsStr.split(',').map(s => s.trim()).filter(s => s);
    let optVal = prompt('Which option triggers this field? (Options: ' + opts.join(', ') + ')');
    if (!optVal || !opts.includes(optVal)) { alert('Invalid option.'); return; }

    document.getElementById('sf-option-val').value = optVal;
    document.getElementById('sf-parent-row-id').value = rowId;
    document.getElementById('sf-label').value = '';
    document.getElementById('sf-name').value = '';
    document.getElementById('sf-type').value = 'text';
    toggleSfOptions();
    
    const modal = new bootstrap.Modal(document.getElementById('sc-subfield-modal'));
    modal.show();
}

function saveSubField() {
    const rowId = document.getElementById('sf-parent-row-id').value;
    const optVal = document.getElementById('sf-option-val').value;
    const subField = {
        label: document.getElementById('sf-label').value,
        name: document.getElementById('sf-name').value,
        type: document.getElementById('sf-type').value
    };
    if (subField.type === 'glpi_dropdown') subField.itemtype = document.getElementById('sf-itemtype').value;
    if (subField.type === 'custom_select') subField.options = document.getElementById('sf-options').value.split(',').map(s => s.trim()).filter(s => s);
    
    if (!subField.label || !subField.name) { alert('Label and Name required.'); return; }

    const row = document.getElementById(rowId);
    addSubFieldUI(row.querySelector('.cf-subfields-list'), optVal, subField);
    bootstrap.Modal.getInstance(document.getElementById('sc-subfield-modal')).hide();
}

function addSubFieldUI(container, optVal, subField) {
    const div = document.createElement('div');
    div.className = 'badge bg-secondary p-2 mb-1 me-1 d-inline-flex align-items-center';
    div.innerHTML = `
        <span><strong>If "${optVal}"</strong> &rarr; ${subField.label} (${subField.type})</span>
        <button type="button" class="btn-close btn-close-white ms-2" style="font-size:0.5rem;" onclick="this.closest('.badge').remove()"></button>
        <input type="hidden" class="sub-data" data-opt="${optVal}" value='${JSON.stringify(subField)}'>
    `;
    container.appendChild(div);
}

function serializeCf(prefix) {
    const rows = document.querySelectorAll('#cf-rows-' + prefix + ' .cf-row');
    const result = [];
    rows.forEach(row => {
        const label = row.querySelector('.cf-label').value;
        const name = row.querySelector('.cf-name').value;
        const type = row.dataset.type;
        if (!label || !name) return;

        let field = { label, name, type };
        if (type === 'readonly') field.value = row.querySelector('.cf-value').value;
        if (type === 'glpi_dropdown') field.itemtype = row.querySelector('.cf-itemtype').value;
        if (type === 'advanced_select') {
            field.options = row.querySelector('.cf-options').value.split(',').map(s => s.trim()).filter(s=>s);
            field.conditions = {};
            row.querySelectorAll('.sub-data').forEach(inp => {
                const opt = inp.getAttribute('data-opt');
                if (!field.conditions[opt]) field.conditions[opt] = [];
                field.conditions[opt].push(JSON.parse(inp.value));
            });
        }
        result.push(field);
    });
    document.getElementById('cf-json-' + prefix).value = JSON.stringify(result);
}
</script>

<?php
echo '<div class="card mb-4"><div class="card-header"><h3>Add Item</h3></div><div class="card-body">';
echo '<form method="post" onsubmit="serializeCf(\'add\')">' . $csrf . '<input type="hidden" name="action" value="add_item">';
echo '<input type="text" name="name" class="form-control mb-2" placeholder="Item Name" required>';
echo '<select name="types_id" class="form-select mb-2" required><option value="">Select Type</option>';
foreach($types as $id => $name) { echo '<option value="'.$id.'">'.htmlspecialchars($name).'</option>'; }
echo '</select><select name="itilcategories_id" class="form-select mb-2"><option value="0">No ITIL Mapping</option>';
foreach($itils as $id => $name) { echo '<option value="'.$id.'">'.htmlspecialchars($name).'</option>'; }
echo '</select>';
echo '<select name="forms_id" class="form-select mb-3"><option value="0">No Form Redirect</option>';
foreach($forms as $id => $name) { echo '<option value="'.$id.'">'.htmlspecialchars($name).'</option>'; }
echo '</select>';

echo render_custom_fields_ui('[]', 'add');
echo render_vis_fields();
echo '<button type="submit" class="btn btn-primary mt-3">Add Item</button></form></div></div>';

echo '<div class="card"><div class="card-header"><h3>Existing Items</h3></div><div class="card-body"><table class="table table-hover"><tr><th>ID</th><th>Type</th><th>Name</th><th>Mapped ITIL</th><th>Actions</th></tr>';
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'ORDER' => 'name']) as $i) {
    echo '<tr><td>' . $i['id'] . '</td><td>' . htmlspecialchars($types[$i['types_id']] ?? 'Unknown') . '</td><td>' . htmlspecialchars($i['name']) . '</td><td>' . htmlspecialchars($itils[$i['itilcategories_id']] ?? 'None') . '</td>';
    echo '<td><details><summary class="btn btn-sm btn-primary">Edit</summary><div class="border p-2 mt-2">';
    echo '<form method="post" onsubmit="serializeCf(\'edit_'.$i['id'].'\')">' . $csrf . '<input type="hidden" name="action" value="update_item"><input type="hidden" name="id" value="' . $i['id'] . '">';
    echo '<input type="text" name="name" class="form-control mb-2" value="' . htmlspecialchars($i['name']) . '" required>';
    echo '<select name="types_id" class="form-select mb-2" required>';
    foreach($types as $id => $name) { echo '<option value="'.$id.'" ' . ($i['types_id']==$id?'selected':'') . '>'.htmlspecialchars($name).'</option>'; }
    echo '</select><select name="itilcategories_id" class="form-select mb-2"><option value="0">No ITIL Mapping</option>';
    foreach($itils as $id => $name) { echo '<option value="'.$id.'" ' . ($i['itilcategories_id']==$id?'selected':'') . '>'.htmlspecialchars($name).'</option>'; }
    echo '</select>';
    echo '<select name="forms_id" class="form-select mb-2"><option value="0">No Form Redirect</option>';
    foreach($forms as $id => $name) { echo '<option value="'.$id.'" ' . (($i['forms_id'] ?? 0)==$id?'selected':'') . '>'.htmlspecialchars($name).'</option>'; }
    echo '</select>';
    
    echo render_custom_fields_ui($i['custom_fields'] ?? '[]', 'edit_'.$i['id']);
    
    echo render_vis_fields($i);
    echo '<button type="submit" class="btn btn-sm btn-primary mt-3">Save</button></form></div></details> ';
    echo '<form method="post" style="display:inline-block">' . $csrf . '<input type="hidden" name="action" value="delete_item"><input type="hidden" name="id" value="' . $i['id'] . '"><button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Delete?\')">Delete</button></form></td></tr>';
}
echo '</table></div></div></div>';
Html::footer();
