<?php
/**
 * Universal Importer for GLPI 11
 * Copyright (C) 2026
 * License: GPLv3+
 */
define('PLUGIN_UNIVERSALIMPORT_VERSION', '1.0.0');
define('PLUGIN_UNIVERSALIMPORT_MIN_GLPI', '11.0.9');
define('PLUGIN_UNIVERSALIMPORT_MAX_GLPI', '11.0.99');

function plugin_init_universalimport(): void
{
    global $PLUGIN_HOOKS;

    require_once __DIR__ . '/src/Menu.php';

    $PLUGIN_HOOKS['csrf_compliant']['universalimport'] = true;

    if (class_exists('PluginUniversalimportMenu')) {
        $PLUGIN_HOOKS['menu_toadd']['universalimport'] = [
            'tools' => 'PluginUniversalimportMenu',
        ];
    }
}

function plugin_version_universalimport(): array
{
    return [
        'name'           => 'Universal Asset & Data Importer',
        'version'        => PLUGIN_UNIVERSALIMPORT_VERSION,
        'author'         => 'Custom',
        'homepage'       => '',
        'license'        => 'GPL-3.0-or-later',
        'requirements'   => [
            'glpi' => [
                'min' => PLUGIN_UNIVERSALIMPORT_MIN_GLPI,
                'max' => PLUGIN_UNIVERSALIMPORT_MAX_GLPI,
            ],
        ],
    ];
}

function plugin_universalimport_check_prerequisites(): bool
{
    if (version_compare(GLPI_VERSION, PLUGIN_UNIVERSALIMPORT_MIN_GLPI, '<')
        || version_compare(GLPI_VERSION, PLUGIN_UNIVERSALIMPORT_MAX_GLPI, '>=')) {
        echo 'Universal Importer requires GLPI 11.0.9 through 11.0.x.';
        return false;
    }
    return true;
}

function plugin_universalimport_check_config($verbose = false): bool
{
    return true;
}

function plugin_universalimport_install(): bool
{
    return true;
}

function plugin_universalimport_uninstall(): bool
{
    return true;
}
