<?php
namespace GlpiPlugin\Servicecatalog;
use CommonDropdown;
class Team extends CommonDropdown {
    public static $rightname = 'config';
    public static function getTypeName($nb = 0) { return __('Service Team', 'servicecatalog'); }
    public static function getTable($classname = null) { return 'glpi_plugin_servicecatalog_teams'; }
    public static function getIcon() { return 'ti ti-users'; }
}
