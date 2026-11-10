<?php
class PluginServicecatalogSelector extends CommonGLPI
{
    public static $rightname = 'config';
    public static function getTypeName($nb = 0) { return __('Service Catalog', 'servicecatalog'); }
    public static function getMenuName() { return __('Service Catalog', 'servicecatalog'); }
    public static function getIcon() { return 'ti ti-headset'; }

    public static function getMenuContent()
    {
        $root = '/front/plugin_servicecatalog.php';
        $admin = Session::haveRight('config', UPDATE);

        $links = [
            'open' => ['name' => __('Open a ticket', 'servicecatalog'), 'page' => $root . '?page=selector', 'icon' => 'ti ti-ticket'],
        ];

        if ($admin) {
            $links['teams'] = ['name' => __('Service Teams', 'servicecatalog'), 'page' => $root . '?page=config', 'icon' => 'ti ti-users'];
            $links['categories'] = ['name' => __('Service Categories', 'servicecatalog'), 'page' => $root . '?page=categories', 'icon' => 'ti ti-category'];
            $links['types'] = ['name' => __('Service Types', 'servicecatalog'), 'page' => $root . '?page=types', 'icon' => 'ti ti-list'];
            $links['items'] = ['name' => __('Service Items', 'servicecatalog'), 'page' => $root . '?page=items', 'icon' => 'ti ti-box'];
        }

        return [
            'title' => self::getMenuName(),
            'page'  => $admin ? $root . '?page=config' : $root . '?page=selector',
            'icon'  => self::getIcon(),
            'links' => ['menu' => $links, 'option' => []],
        ];
    }
}
