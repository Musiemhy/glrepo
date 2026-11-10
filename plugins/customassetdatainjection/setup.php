<?php

/**
 * Custom Asset Data Injection Compatibility
 *
 * Makes GLPI 11.x Custom Asset Definitions available
 * to the Marketplace Data Injection plugin.
 */

define('PLUGIN_CUSTOMASSETDATAINJECTION_VERSION', '1.0.0');
define('PLUGIN_CUSTOMASSETDATAINJECTION_MIN_GLPI', '11.0.0');
define('PLUGIN_CUSTOMASSETDATAINJECTION_MAX_GLPI', '11.0.99');

function plugin_init_customassetdatainjection()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['plugin_datainjection_populate']['customassetdatainjection']
        = 'plugin_customassetdatainjection_populate';
}

function plugin_version_customassetdatainjection()
{
    return [
        'name'           => 'Custom Asset Data Injection Compatibility',
        'version'        => PLUGIN_CUSTOMASSETDATAINJECTION_VERSION,
        'author'         => 'IT Modernization',
        'license'        => 'GPLv3',
        'homepage'       => '',
        'minGlpiVersion' => PLUGIN_CUSTOMASSETDATAINJECTION_MIN_GLPI,
        'maxGlpiVersion' => PLUGIN_CUSTOMASSETDATAINJECTION_MAX_GLPI,
    ];
}

function plugin_check_prerequisites_customassetdatainjection()
{
    if (!defined('GLPI_VERSION')) {
        return false;
    }

    if (version_compare(
        GLPI_VERSION,
        PLUGIN_CUSTOMASSETDATAINJECTION_MIN_GLPI,
        '<'
    )) {
        return false;
    }

    if (version_compare(
        GLPI_VERSION,
        PLUGIN_CUSTOMASSETDATAINJECTION_MAX_GLPI,
        '>'
    )) {
        return false;
    }

    return true;
}

function plugin_check_config_customassetdatainjection($verbose = false)
{
    return true;
}

function plugin_customassetdatainjection_populate()
{
    global $INJECTABLE_TYPES;

    require_once __DIR__ . '/inc/adapter.class.php';

    \PluginCustomassetdatainjectionAdapter::registerCustomAssets(
        $INJECTABLE_TYPES
    );
}
