<?php
global $CFG_GLPI;
$root = rtrim($CFG_GLPI['root_doc'] ?? '/glpi', '/');
header('Location: ' . $root . '/front/plugin_servicecatalog.php?page=config');
exit;
