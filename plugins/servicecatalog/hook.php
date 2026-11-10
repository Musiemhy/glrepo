<?php

function plugin_servicecatalog_fetch_one(string $table, array $where): ?array
{
    global $DB;
    foreach ($DB->request(['FROM' => $table, 'WHERE' => $where]) as $row) {
        return $row;
    }
    return null;
}

function plugin_servicecatalog_pre_item_add($item): void
{
    global $DB;
    if (!($item instanceof Ticket)) return;
    try {
        $scData = $_POST['sc_selection_data'] ?? $_COOKIE['sc_selection'] ?? '';
        if (!empty($scData)) {
            $sc = json_decode(urldecode($scData), true);
            if ($sc && !empty($sc['item'])) {
                $serviceItem = plugin_servicecatalog_fetch_one('glpi_plugin_servicecatalog_items', ['id' => (int)$sc['item']]);
                if ($serviceItem && !empty($serviceItem['itilcategories_id'])) {
                    $item->input['itilcategories_id'] = (int)$serviceItem['itilcategories_id'];
                }
            }
        }
    } catch (\Throwable $e) {
        Toolbox::logInFile('servicecatalog', "Pre Item Add Hook Error: " . $e->getMessage() . "\n");
    }
}

function plugin_servicecatalog_item_add($item): void
{
    global $DB;
    if (!($item instanceof Ticket) || (int) $item->getID() <= 0) return;

    try {
        $scData = $_POST['sc_selection_data'] ?? $_COOKIE['sc_selection'] ?? '';
        if (!empty($scData)) {
            $sc = json_decode(urldecode($scData), true);
            if ($sc && !empty($sc['item'])) {
                $ticketId = (int) $item->getID();
                
                $customData = null;
                if (isset($sc['custom']) && is_array($sc['custom']) && count($sc['custom']) > 0) {
                    $customData = json_encode($sc['custom'], JSON_UNESCAPED_UNICODE);
                }
                
                // Log what is being saved so you can check files/_log/servicecatalog.log
                Toolbox::logInFile('servicecatalog', "Saving Ticket $ticketId. Custom Data: " . print_r($sc['custom'], true) . "\n");

                $existing = plugin_servicecatalog_fetch_one('glpi_plugin_servicecatalog_ticketservices', ['tickets_id' => $ticketId]);
                if ($existing) {
                    $DB->update('glpi_plugin_servicecatalog_ticketservices', [
                        'teams_id' => (int)($sc['team'] ?? 0), 
                        'categories_id' => (int)($sc['cat'] ?? 0), 
                        'types_id' => (int)($sc['type'] ?? 0), 
                        'items_id' => (int)$sc['item'], 
                        'custom_data' => $customData
                    ], ['tickets_id' => $ticketId]);
                } else {
                    $DB->insert('glpi_plugin_servicecatalog_ticketservices', [
                        'tickets_id' => $ticketId, 
                        'teams_id' => (int)($sc['team'] ?? 0), 
                        'categories_id' => (int)($sc['cat'] ?? 0), 
                        'types_id' => (int)($sc['type'] ?? 0), 
                        'items_id' => (int)$sc['item'], 
                        'custom_data' => $customData
                    ]);
                }

                $serviceItem = plugin_servicecatalog_fetch_one('glpi_plugin_servicecatalog_items', ['id' => (int)$sc['item']]);
                if ($serviceItem && !empty($serviceItem['itilcategories_id'])) {
                    $DB->update('glpi_tickets', ['itilcategories_id' => (int)$serviceItem['itilcategories_id']], ['id' => $ticketId]);
                }
                setcookie('sc_selection', '', time() - 3600, '/');
            }
        }
    } catch (\Throwable $e) {
        Toolbox::logInFile('servicecatalog', "Item Add Hook Error: " . $e->getMessage() . "\n");
    }
}

function plugin_servicecatalog_getDropdown(): array
{
    return [
        'GlpiPlugin\Servicecatalog\Team'     => __('Service Team', 'servicecatalog'),
        'GlpiPlugin\Servicecatalog\Category' => __('Service Category', 'servicecatalog'),
        'GlpiPlugin\Servicecatalog\Type'     => __('Service Type', 'servicecatalog'),
        'GlpiPlugin\Servicecatalog\Item'     => __('Service Item', 'servicecatalog'),
    ];
}

function plugin_servicecatalog_getAddSearchOptionsNew(string $itemtype): array
{
    if ($itemtype !== 'Ticket') return [];
    $table = 'glpi_plugin_servicecatalog_ticketservices';
    $base  = 8600;
    $map = [
        [1, __('Service Team', 'servicecatalog'), 'teams_id', 'GlpiPlugin\Servicecatalog\Team'],
        [2, __('Service Category', 'servicecatalog'), 'categories_id', 'GlpiPlugin\Servicecatalog\Category'],
        [3, __('Service Type', 'servicecatalog'), 'types_id', 'GlpiPlugin\Servicecatalog\Type'],
        [4, __('Service Item', 'servicecatalog'), 'items_id', 'GlpiPlugin\Servicecatalog\Item'],
    ];
    $opts = [];
    foreach ($map as [$off, $label, $column, $itemtypeClass]) {
        $opts[] = [
            'id' => $base + $off, 'name' => $label, 'table' => $table, 'field' => $column, 'linkfield' => 'tickets_id', 'datatype' => 'dropdown', 'itemtype' => $itemtypeClass, 'joinparams' => ['jointype' => 'child'],
        ];
    }
    return $opts;
}
