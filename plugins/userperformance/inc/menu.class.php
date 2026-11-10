<?php

class PluginUserperformanceMenu extends CommonGLPI
{
    public static function getTypeName($nb = 0)
    {
        return __('User Performance KPI', 'userperformance');
    }

    public static function getMenuName()
    {
        return __('User Performance KPI', 'userperformance');
    }

    public static function getMenuContent()
    {
        return [
            'title' => self::getMenuName(),
            'page'  => '/plugins/userperformance/front/dashboard.php',
            'icon'  => 'ti ti-chart-bar',
        ];
    }
}
