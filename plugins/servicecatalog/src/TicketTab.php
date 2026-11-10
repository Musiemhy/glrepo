<?php
namespace GlpiPlugin\Servicecatalog;

use CommonGLPI;
use Session;
use Ticket;
use Html;

class TicketTab extends CommonGLPI
{
    public static function getTypeName($nb = 0) { return __('Service Catalog', 'servicecatalog'); }
    public static function getIcon() { return 'ti ti-headset'; }
    
    public static function getTabNameForItem(CommonGLPI $item, $withtemplate = 0)
    {
        if ($item instanceof Ticket && !$withtemplate) {
            return self::createTabEntry(self::getTypeName(), 0, $item::getType(), self::getIcon());
        }
        return '';
    }

    public static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0)
    {
        if ($item instanceof Ticket) {
            self::showForTicket($item);
        }
        return true;
    }

    public static function showForTicket(Ticket $ticket)
    {
        global $DB;
        $ID = $ticket->getID();
        
        $current = null;
        foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_ticketservices', 'WHERE' => ['tickets_id' => $ID]]) as $row) {
            $current = $row;
            break;
        }

        // Handle POST Save
        if (isset($_POST['update_service_catalog'])) {
            $itemId = (int)$_POST['plugin_servicecatalog_item'];
            $teamId = (int)$_POST['plugin_servicecatalog_team'];
            $catId = (int)$_POST['plugin_servicecatalog_category'];
            $typeId = (int)$_POST['plugin_servicecatalog_type'];

            $itilId = 0;
            $item = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['id' => $itemId]])->current();
            if ($item) $itilId = $item['itilcategories_id'];

            $customData = [];
            if (isset($_POST['plugin_servicecatalog_custom_fields']) && is_array($_POST['plugin_servicecatalog_custom_fields'])) {
                $customData = $_POST['plugin_servicecatalog_custom_fields'];
            }

            $dataToSave = [
                'teams_id' => $teamId, 
                'categories_id' => $catId, 
                'types_id' => $typeId, 
                'items_id' => $itemId,
                'custom_data' => json_encode($customData)
            ];

            if ($current) {
                $DB->update('glpi_plugin_servicecatalog_ticketservices', $dataToSave, ['tickets_id' => $ID]);
            } else {
                $dataToSave['tickets_id'] = $ID;
                $DB->insert('glpi_plugin_servicecatalog_ticketservices', $dataToSave);
            }

            if ($itilId > 0) {
                $DB->update('glpi_tickets', ['itilcategories_id' => $itilId], ['id' => $ID]);
                Session::addMessageAfterRedirect(__('ITIL Category updated based on Service Item.', 'servicecatalog'));
            }
            Html::back();
        }

        // Fetch all options
        $teams = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_teams', 'WHERE' => ['is_active' => 1], 'ORDER' => 'name']) as $r) { $teams[$r['id']] = $r['name']; }
        $categories = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_categories', 'WHERE' => ['is_active' => 1], 'ORDER' => 'name']) as $r) { $categories[$r['id']] = $r['name']; }
        $types = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_types', 'WHERE' => ['is_active' => 1], 'ORDER' => 'name']) as $r) { $types[$r['id']] = $r['name']; }
        $items = []; foreach ($DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['is_active' => 1], 'ORDER' => 'name']) as $r) { $items[$r['id']] = $r['name']; }

        $tId = $current['teams_id'] ?? 0;
        $cId = $current['categories_id'] ?? 0;
        $tyId = $current['types_id'] ?? 0;
        $iId = $current['items_id'] ?? 0;

        echo "<form method='post' action=''>";
        echo "<table class='tab_cadre_fixe'>";
        echo "<tr><th colspan='2'>" . __('Edit Service Catalog', 'servicecatalog') . "</th></tr>";
        
        // 1. Core Dropdowns
        echo "<tr class='tab_bg_1'><td>" . __('Service Team') . "</td><td>";
        \Dropdown::showFromArray('plugin_servicecatalog_team', $teams, ['value' => $tId, 'display_emptychoice' => true]);
        echo "</td></tr>";
        
        echo "<tr class='tab_bg_1'><td>" . __('Service Category') . "</td><td>";
        \Dropdown::showFromArray('plugin_servicecatalog_category', $categories, ['value' => $cId, 'display_emptychoice' => true]);
        echo "</td></tr>";

        echo "<tr class='tab_bg_1'><td>" . __('Service Type') . "</td><td>";
        \Dropdown::showFromArray('plugin_servicecatalog_type', $types, ['value' => $tyId, 'display_emptychoice' => true]);
        echo "</td></tr>";

        echo "<tr class='tab_bg_1'><td>" . __('Service Item') . "</td><td>";
        \Dropdown::showFromArray('plugin_servicecatalog_item', $items, ['value' => $iId, 'display_emptychoice' => true]);
        echo "</td></tr>";

        // 2. Render Editable Custom Fields
        $cFields = [];
        $cData = [];
        if ($current && !empty($current['custom_data'])) {
            $cData = json_decode($current['custom_data'], true) ?: [];
        }
        
        if ($iId > 0) {
            $itemDef = $DB->request(['FROM' => 'glpi_plugin_servicecatalog_items', 'WHERE' => ['id' => $iId]])->current();
            if ($itemDef && !empty($itemDef['custom_fields'])) {
                $cFields = json_decode($itemDef['custom_fields'], true) ?: [];
            }
        }

        if (count($cFields) > 0) {
            echo "<tr><th colspan='2'>" . __('Additional Information', 'servicecatalog') . "</th></tr>";
            foreach ($cFields as $field) {
                $val = $cData[$field['name']] ?? '';
                echo "<tr class='tab_bg_1'><td>" . htmlspecialchars($field['label']) . "</td><td>";
                
                if ($field['type'] === 'readonly') {
                    echo "<span class='text-muted'>" . htmlspecialchars($field['value'] ?? '') . "</span>";
                } elseif ($field['type'] === 'glpi_dropdown') {
                    $options = [];
                    if (class_exists($field['itemtype'])) {
                        $table = $field['itemtype']::getTable();
                        foreach ($DB->request(['FROM' => $table, 'LIMIT' => 200]) as $r) {
                            $options[$r['id']] = $r['name'] ?? $r['realname'] ?? 'ID ' . $r['id'];
                        }
                    }
                    \Dropdown::showFromArray("plugin_servicecatalog_custom_fields[{$field['name']}]", $options, ['value' => $val, 'display_emptychoice' => true]);
                } elseif ($field['type'] === 'advanced_select' && !empty($field['options'])) {
                    $options = array_combine($field['options'], $field['options']);
                    \Dropdown::showFromArray("plugin_servicecatalog_custom_fields[{$field['name']}]", $options, ['value' => $val, 'display_emptychoice' => true]);
                } else {
                    echo "<input type='{$field['type']}' name='plugin_servicecatalog_custom_fields[{$field['name']}]' value='" . htmlspecialchars($val) . "' class='form-control'>";
                }
                echo "</td></tr>";
            }
        }

        echo "<tr class='tab_bg_1'><td colspan='2' class='center'>";
        echo "<button type='submit' name='update_service_catalog' class='btn btn-primary' value='1'>" . _sx('button', 'Save') . "</button>";
        echo "</td></tr>";
        echo "</table>";
        Html::closeForm();
    }
}
