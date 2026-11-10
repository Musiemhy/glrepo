<?php
namespace GlpiPlugin\Servicecatalog;
use CommonDropdown;
class Type extends CommonDropdown {
    public static $rightname = 'config';
    public static function getTypeName($nb = 0) { return __('Service Type', 'servicecatalog'); }
    public static function getTable($classname = null) { return 'glpi_plugin_servicecatalog_types'; }
    public static function getIcon() { return 'ti ti-list'; }
}
