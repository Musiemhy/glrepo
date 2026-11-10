<?php
if (!defined('GLPI_CONFIG_DIR')) { define('GLPI_CONFIG_DIR', dirname(__DIR__, 3) . '/config'); }
require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 3) . '/inc/includes.php';
require GLPI_CONFIG_DIR . '/config_db.php';

header('Content-Type: text/html; charset=utf-8');
global $DB;
if (!($DB ?? null) instanceof DBmysql) { $DB = new DB(); $DB->connect(); }

$form_type = (int)($_GET['form_type'] ?? 1);
$where = ['is_active' => 1];
if ($form_type === 1) $where['is_incident'] = 1;
if ($form_type === 2) $where['is_request'] = 1;

$teams = [];
foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_teams', 'WHERE' => $where, 'ORDER' => 'name']) as $row) { $teams[] = $row; }
$h = static fn($v) => htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
?>
<div class="card shadow-sm border-0 mb-4" id="sc-injected-card">
  <div class="card-header bg-primary-lt">
    <h3 class="card-title mb-0"><i class="ti ti-headset me-2 text-primary"></i><?= __('Service Catalog', 'servicecatalog') ?></h3>
  </div>
  <div class="card-body">
    <div class="row g-3">
      
      <div class="col-md-6">
        <label class="form-label required"><?= __('Ticket Type', 'servicecatalog') ?></label>
        <select class="form-select" id="sc_ticket_type" required>
            <option value="1" <?= $form_type === 1 ? 'selected' : '' ?>>Incident</option>
            <option value="2" <?= $form_type === 2 ? 'selected' : '' ?>>Request</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label required"><?= __('Service Team', 'servicecatalog') ?></label>
        <select class="form-select" id="sc_team" required>
          <option value="">— <?= __('Select Team', 'servicecatalog') ?> —</option>
          <?php foreach ($teams as $team): ?><option value="<?= (int)$team['id'] ?>"><?= $h($team['name']) ?></option><?php endforeach; ?>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label required"><?= __('Service Category', 'servicecatalog') ?></label>
        <select class="form-select" id="sc_category" required disabled>
          <option value="">— <?= __('Select Category', 'servicecatalog') ?> —</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label required"><?= __('Service Type', 'servicecatalog') ?></label>
        <select class="form-select" id="sc_type" required disabled>
          <option value="">— <?= __('Select Type', 'servicecatalog') ?> —</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label required"><?= __('Service Item', 'servicecatalog') ?></label>
        <select class="form-select" id="sc_item" required disabled>
          <option value="">— <?= __('Select Item', 'servicecatalog') ?> —</option>
        </select>
      </div>

    </div>
    <div id="sc-custom-fields-container" class="mt-3 p-3 bg-light border rounded d-none"></div>
  </div>
</div>
