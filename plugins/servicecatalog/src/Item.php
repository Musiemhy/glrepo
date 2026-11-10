<?php
namespace GlpiPlugin\Servicecatalog;
use CommonDropdown;
class Item extends CommonDropdown {
    public static $rightname = 'config';
    public static function getTypeName($nb = 0) { return __('Service Item', 'servicecatalog'); }
    public static function getTable($classname = null) { return 'glpi_plugin_servicecatalog_items'; }
    public static function getIcon() { return 'ti ti-box'; }
}
