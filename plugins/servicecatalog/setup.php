<?php
require_once __DIR__ . '/hook.php';

define('PLUGIN_SERVICECATALOG_VERSION', '1.0.0');
define('PLUGIN_SERVICECATALOG_MIN_GLPI', '11.0.0');
define('PLUGIN_SERVICECATALOG_MAX_GLPI', '11.0.99');

function plugin_init_servicecatalog()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['servicecatalog']          = true;
    $PLUGIN_HOOKS['getAddSearchOptionsNew']['servicecatalog']  = 'plugin_servicecatalog_getAddSearchOptionsNew';

    if (!Plugin::isPluginActive('servicecatalog')) {
        return;
    }

    /* ---- Class registration (GLPI 11 autoloader) ---- */
    $PLUGIN_HOOKS['plugin_register_class']['servicecatalog'] = [
        \GlpiPlugin\Servicecatalog\Team::class,
        \GlpiPlugin\Servicecatalog\Category::class,
        \GlpiPlugin\Servicecatalog\Type::class,
        \GlpiPlugin\Servicecatalog\Item::class,
        \GlpiPlugin\Servicecatalog\TicketTab::class,
    ];

    /* ---- Register the Tab on Tickets ---- */
    

    /* ---- Dropdown registration ---- */
    $PLUGIN_HOOKS['getDropdown']['servicecatalog']             = 'plugin_servicecatalog_getDropdown';

    /* ---- Hooks ---- */
    $PLUGIN_HOOKS['pre_item_form']['servicecatalog']           = 'plugin_servicecatalog_pre_item_form';
    $PLUGIN_HOOKS['pre_item_add']['servicecatalog']['Ticket']  = 'plugin_servicecatalog_pre_item_add';
    $PLUGIN_HOOKS['item_add']['servicecatalog']['Ticket']      = 'plugin_servicecatalog_item_add';

    /* ---- JS Injector ---- */
    $PLUGIN_HOOKS['add_javascript']['servicecatalog'][]        = 'js/form_injector.js';

    /* ---- Menus ---- */
    $PLUGIN_HOOKS['menu_toadd']['servicecatalog'] = [
        'tools' => 'PluginServicecatalogSelector',
        'helpdesk' => 'PluginServicecatalogTicketsMenu',
    ];

    $PLUGIN_HOOKS['config_page']['servicecatalog']             = 'front/redirect.php';
}

function plugin_version_servicecatalog()
{
    return [
        'name'         => 'Service Catalog',
        'version'      => PLUGIN_SERVICECATALOG_VERSION,
        'author'       => 'Custom GLPI ITSM',
        'license'      => 'GPLv3',
        'requirements' => [
            'glpi' => [
                'min' => PLUGIN_SERVICECATALOG_MIN_GLPI,
                'max' => PLUGIN_SERVICECATALOG_MAX_GLPI,
            ],
        ],
    ];
}

function plugin_servicecatalog_check_prerequisites()
{
    return version_compare(GLPI_VERSION, PLUGIN_SERVICECATALOG_MIN_GLPI, '>=') 
        && version_compare(GLPI_VERSION, PLUGIN_SERVICECATALOG_MAX_GLPI, '<');
}

function plugin_servicecatalog_check_config($verbose = false) { return true; }
