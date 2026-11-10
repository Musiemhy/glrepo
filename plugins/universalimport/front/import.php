<?php
include(__DIR__ . '/../../../inc/includes.php');

Session::checkRight('config', UPDATE);

require_once __DIR__ . '/../src/Importer.php';

global $CFG_GLPI;

$pluginUrl = ($CFG_GLPI['root_doc'] ?? '') . '/plugins/universalimport/front/import.php';

$action = $_POST['action'] ?? '';
$targets = PluginUniversalimportImporter::getTargets();
$error = null;
$rows = [];
$headers = [];
$selectedTarget = $_POST['itemtype'] ?? 'Computer';
$mapping = $_POST['mapping'] ?? [];
$duplicateMode = $_POST['duplicate_mode'] ?? 'skip';
$dropdownMode = $_POST['dropdown_mode'] ?? 'create';
$result = null;
$originalName = '';

// ----- refresh fields without re-uploading -----
if ($action === 'refresh_fields') {
    $selectedTarget = $_POST['itemtype'] ?? $selectedTarget;
    $tmp = $_SESSION['plugin_universalimport_file'] ?? '';
    if (is_string($tmp) && is_file($tmp)) {
        try {
            $originalName = $_SESSION['plugin_universalimport_name'] ?? '';
            $rows = PluginUniversalimportImporter::readFile($tmp, $originalName);
            $headers = $rows ? array_keys($rows[0]) : [];
            $_SESSION['plugin_universalimport_target'] = $selectedTarget;
        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
    }
}

// ----- preview a newly uploaded file -----
if ($action === 'preview') {
    if (!isset($_FILES['import_file'])) {
        $error = 'Please select a file.';
    } elseif ($_FILES['import_file']['error'] === UPLOAD_ERR_NO_FILE) {
        $error = 'No file was uploaded. Please choose a file first.';
    } elseif ($_FILES['import_file']['error'] !== UPLOAD_ERR_OK) {
        $code = $_FILES['import_file']['error'];
        $messages = [
            UPLOAD_ERR_INI_SIZE   => 'File exceeds the server upload_max_filesize limit.',
            UPLOAD_ERR_FORM_SIZE  => 'File exceeds the form MAX_FILE_SIZE limit.',
            UPLOAD_ERR_PARTIAL    => 'The file was only partially uploaded.',
            UPLOAD_ERR_NO_FILE    => 'No file was uploaded.',
            UPLOAD_ERR_NO_TMP_DIR => 'Server is missing a temporary folder.',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write the file to disk.',
            UPLOAD_ERR_EXTENSION  => 'A PHP extension stopped the upload.',
        ];
        $error = $messages[$code] ?? 'Upload error (code ' . $code . ').';
    } else {
        $tmp = tempnam(sys_get_temp_dir(), 'glpi_ui_');
        if (!move_uploaded_file($_FILES['import_file']['tmp_name'], $tmp)) {
            $error = 'Unable to store uploaded file temporarily.';
        } else {
            try {
                $originalName = $_FILES['import_file']['name'] ?? '';
                $rows = PluginUniversalimportImporter::readFile($tmp, $originalName);
                if (!$rows) {
                    throw new RuntimeException('The file contains no data rows.');
                }
                $headers = array_keys($rows[0]);
                $_SESSION['plugin_universalimport_file'] = $tmp;
                $_SESSION['plugin_universalimport_target'] = $selectedTarget;
                $_SESSION['plugin_universalimport_name'] = $originalName;
            } catch (Throwable $e) {
                @unlink($tmp);
                $error = $e->getMessage();
            }
        }
    }
}

// ----- perform the import -----
if ($action === 'import') {
    $tmp = $_SESSION['plugin_universalimport_file'] ?? '';
    $selectedTarget = $_SESSION['plugin_universalimport_target'] ?? $selectedTarget;
    $originalName = $_SESSION['plugin_universalimport_name'] ?? '';

    if (!is_string($tmp) || !is_file($tmp)) {
        $error = 'The uploaded file has expired. Please upload it again.';
    } else {
        try {
            $rows = PluginUniversalimportImporter::readFile($tmp, $originalName);
            $result = PluginUniversalimportImporter::import(
                $selectedTarget,
                $rows,
                is_array($mapping) ? $mapping : [],
                $duplicateMode,
                $dropdownMode
            );
            @unlink($tmp);
            unset(
                $_SESSION['plugin_universalimport_file'],
                $_SESSION['plugin_universalimport_target'],
                $_SESSION['plugin_universalimport_name']
            );
        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
    }
}

Html::header('Universal Asset & Data Importer', '', 'tools', 'PluginUniversalimportMenu');
?>

<div class="container-fluid mt-3">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title mb-0">
                        <i class="ti ti-file-import me-2"></i>Universal Asset &amp; Data Importer
                    </h3>
                </div>
                <div class="card-body">

                    <?php if ($error): ?>
                        <div class="alert alert-danger">
                            <i class="ti ti-alert-triangle me-1"></i>
                            <?php echo htmlescape($error); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($result): ?>
                        <div class="alert alert-success">
                            <h4 class="alert-title">Import completed</h4>
                            <div class="row mt-2">
                                <div class="col-md-2"><strong>Total:</strong> <?php echo (int)$result['total']; ?></div>
                                <div class="col-md-2"><strong>Created:</strong> <?php echo (int)$result['created']; ?></div>
                                <div class="col-md-2"><strong>Updated:</strong> <?php echo (int)$result['updated']; ?></div>
                                <div class="col-md-2"><strong>Skipped:</strong> <?php echo (int)$result['skipped']; ?></div>
                                <div class="col-md-2"><strong>Errors:</strong> <?php echo count($result['errors']); ?></div>
                            </div>
                        </div>

                        <?php if (!empty($result['errors'])): ?>
                            <div class="alert alert-danger">
                                <h4 class="alert-title">Errors</h4>
                                <ul class="mb-0">
                                    <?php foreach ($result['errors'] as $item): ?>
                                        <li><?php echo htmlescape((string)$item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($result['warnings'])): ?>
                            <div class="alert alert-warning">
                                <h4 class="alert-title">Warnings</h4>
                                <ul class="mb-0">
                                    <?php foreach ($result['warnings'] as $item): ?>
                                        <li><?php echo htmlescape((string)$item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <form method="post" enctype="multipart/form-data" action="<?php echo htmlescape($pluginUrl); ?>" class="mt-2">
                        <?php echo Html::hidden('_glpi_csrf_token', ['value' => Session::getNewCSRFToken()]); ?>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label required">Import target</label>
                                <select name="itemtype" class="form-select" required>
                                    <?php foreach ($targets as $key => $label): ?>
                                        <option value="<?php echo htmlescape($key); ?>"<?php echo ($key === $selectedTarget) ? ' selected' : ''; ?>>
                                            <?php echo htmlescape($label); ?> [<?php echo htmlescape($key); ?>]
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-hint">
                                    Choose the GLPI item type you want to import.
                                    <?php if (!empty($rows)): ?>
                                        <button type="submit" name="action" value="refresh_fields" class="btn btn-sm btn-outline-secondary ms-2">
                                            <i class="ti ti-refresh me-1"></i>Refresh fields
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label required">CSV or XLSX file</label>
                                <input type="file" name="import_file" accept=".csv,.xlsx,.xls" class="form-control">
                                <div class="form-hint">Only CSV and XLSX are supported. Commas, semicolons and tabs are auto-detected.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="action" value="preview" class="btn btn-primary">
                                <i class="ti ti-eye me-1"></i>Preview
                            </button>
                        </div>

                        <?php if (!empty($rows)): ?>
                            <?php $availableFields = PluginUniversalimportImporter::getFields($selectedTarget); ?>

                            <hr class="my-4">

                            <h3><i class="ti ti-table me-1"></i>Preview &amp; Column Mapping</h3>
                            <p class="text-muted">
                                File: <strong><?php echo htmlescape($originalName); ?></strong> —
                                <?php echo count($rows); ?> row(s), <?php echo count($headers); ?> column(s).
                                Target: <strong><?php echo htmlescape($selectedTarget); ?></strong>.
                            </p>

                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width:25%">Source column</th>
                                            <th style="width:35%">Target GLPI field</th>
                                            <th style="width:40%">Sample value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($headers as $col): ?>
                                            <?php
                                                $sample = '';
                                                foreach ($rows as $r) {
                                                    if (isset($r[$col]) && trim((string)$r[$col]) !== '') {
                                                        $sample = (string)$r[$col];
                                                        break;
                                                    }
                                                }
                                            ?>
                                            <tr>
                                                <td><strong><?php echo htmlescape((string)$col); ?></strong></td>
                                                <td>
                                                    <select name="mapping[<?php echo htmlescape((string)$col); ?>]" class="form-select form-select-sm">
                                                        <option value="">— Ignore this column —</option>
                                                        <?php foreach ($availableFields as $fieldKey => $fieldLabel): ?>
                                                            <?php
                                                                $autoSel = (strcasecmp((string)$col, $fieldKey) === 0
                                                                         || strcasecmp((string)$col, (string)$fieldLabel) === 0) ? ' selected' : '';
                                                            ?>
                                                            <option value="<?php echo htmlescape($fieldKey); ?>"<?php echo $autoSel; ?>>
                                                                <?php echo htmlescape($fieldLabel); ?> (<?php echo htmlescape($fieldKey); ?>)
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td class="text-muted"><?php echo htmlescape($sample); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <h4><i class="ti ti-list me-1"></i>Data preview (first 20 rows)</h4>
                            <div class="table-responsive mb-4">
                                <table class="table table-sm table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <?php foreach ($headers as $h): ?>
                                                <th><?php echo htmlescape((string)$h); ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (array_slice($rows, 0, 20) as $r): ?>
                                            <tr>
                                                <?php foreach ($headers as $h): ?>
                                                    <td><?php echo htmlescape((string)($r[$h] ?? '')); ?></td>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Duplicate handling</label>
                                    <select class="form-select" name="duplicate_mode">
                                        <?php foreach ([
                                            'skip'   => 'Skip existing records',
                                            'update' => 'Update existing records',
                                            'create' => 'Create another record',
                                        ] as $k => $v): ?>
                                            <option value="<?php echo $k; ?>"<?php echo ($k === $duplicateMode) ? ' selected' : ''; ?>>
                                                <?php echo htmlescape($v); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="form-hint">Duplicates are detected by serial number, UUID, or name.</div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Dropdown handling</label>
                                    <select class="form-select" name="dropdown_mode">
                                        <?php foreach ([
                                            'create' => 'Create missing dropdown entries',
                                            'strict' => 'Reject rows with missing values',
                                            'skip'   => 'Skip missing values (leave empty)',
                                        ] as $k => $v): ?>
                                            <option value="<?php echo $k; ?>"<?php echo ($k === $dropdownMode) ? ' selected' : ''; ?>>
                                                <?php echo htmlescape($v); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="form-hint">Applies to Location, Manufacturer, Model, Type, Status, etc.</div>
                                </div>
                            </div>

                            <div class="mt-4 d-flex gap-2">
                                <button type="submit" name="action" value="import" class="btn btn-success"
                                        onclick="return confirm('Start import now?');">
                                    <i class="ti ti-database-import me-1"></i>Start Import
                                </button>
                                <a class="btn btn-outline-secondary" href="<?php echo htmlescape($pluginUrl); ?>">
                                    <i class="ti ti-refresh me-1"></i>Start over
                                </a>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
Html::footer();
