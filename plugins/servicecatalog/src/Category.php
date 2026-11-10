<?php
namespace GlpiPlugin\Servicecatalog;
use CommonDropdown;
class Category extends CommonDropdown {
    public static $rightname = 'config';
    public static function getTypeName($nb = 0) { return __('Service Category', 'servicecatalog'); }
    public static function getTable($classname = null) { return 'glpi_plugin_servicecatalog_categories'; }
    public static function getIcon() { return 'ti ti-category'; }
}
