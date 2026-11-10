<?php

if (!defined('GLPI_ROOT')) {
    die('Sorry. You cannot access this file directly.');
}

define('PLUGIN_USERPERFORMANCE_VERSION', '1.0.1');
define('PLUGIN_USERPERFORMANCE_MIN_GLPI', '11.0.0');
define('PLUGIN_USERPERFORMANCE_MAX_GLPI', '11.0.99');

/**
 * Plugin initialization
 */
function plugin_init_userperformance(): void
{
    global $PLUGIN_HOOKS;

    // Load menu class
    $menu_class = __DIR__ . '/inc/menu.class.php';
    if (is_readable($menu_class)) {
        require_once $menu_class;
    }

    $PLUGIN_HOOKS['csrf_compliant']['userperformance'] = true;

    // Add menu under Tools
    if (class_exists('PluginUserperformanceMenu')) {
        $PLUGIN_HOOKS['menu_toadd']['userperformance'] = [
            'tools' => 'PluginUserperformanceMenu',
        ];
    }
}

/**
 * Plugin version information
 */
function plugin_version_userperformance(): array
{
    return [
        'name' => __('User Performance KPI', 'userperformance'),
        'version' => PLUGIN_USERPERFORMANCE_VERSION,
        'author' => 'Custom GLPI plugin',
        'license' => 'GPLv3+',
        'homepage' => '',
        'requirements' => [
            'glpi' => [
                'min' => PLUGIN_USERPERFORMANCE_MIN_GLPI,
                'max' => PLUGIN_USERPERFORMANCE_MAX_GLPI,
            ],
        ],
    ];
}

/**
 * Check GLPI prerequisites
 */
function plugin_userperformance_check_prerequisites(): bool
{
    if (
        version_compare(GLPI_VERSION, PLUGIN_USERPERFORMANCE_MIN_GLPI, '<')
        || version_compare(GLPI_VERSION, PLUGIN_USERPERFORMANCE_MAX_GLPI, '>=')
    ) {
        echo 'This plugin requires GLPI 11.x.';
        return false;
    }

    return true;
}

/**
 * Check plugin configuration
 */
function plugin_userperformance_check_config(bool $verbose = false): bool
{
    return true;
}

/**
 * Install plugin
 */
function plugin_userperformance_install(): bool
{
    // This plugin does not require its own database tables.
    return true;
}

/**
 * Uninstall plugin
 */
function plugin_userperformance_uninstall(): bool
{
    // This plugin does not create database tables.
    return true;
}
