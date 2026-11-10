<?php

class PluginUniversalimportMenu extends CommonGLPI
{
    public static $rightname = 'config';

    public static function getTypeName($nb = 0)
    {
        return __('Universal Asset & Data Importer', 'universalimport');
    }

    public static function getMenuName()
    {
        return self::getTypeName();
    }

    public static function getMenuContent()
    {
        return [
            'title' => self::getMenuName(),
            'page'  => '/plugins/universalimport/front/import.php',
            'icon'  => 'ti ti-file-import',
        ];
    }
}
