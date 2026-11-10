<?php

/**
 * Custom Asset Data Injection adapter.
 *
 * GLPI Custom Asset classes are generated dynamically by
 * AssetDefinitionManager. Data Injection expects an injection
 * class derived from the actual itemtype, so adapters are
 * generated dynamically as well.
 */

use Glpi\Asset\AssetDefinitionManager;
use PluginDatainjectionCommonInjectionLib;

class PluginCustomassetdatainjectionAdapter
{
    /**
     * Register all GLPI Custom Asset Definitions with Data Injection.
     */
    public static function registerCustomAssets(array &$injectableTypes)
    {
        if (!class_exists(AssetDefinitionManager::class)) {
            return;
        }

        try {
            $manager = AssetDefinitionManager::getInstance();
            $manager->bootDefinitions();

            $classes = $manager->getCustomObjectClassNames(true);
        } catch (\Throwable $e) {
            return;
        }

        if (!is_array($classes)) {
            return;
        }

        foreach ($classes as $assetClass) {
            if (!class_exists($assetClass)) {
                continue;
            }

            if (!is_a($assetClass, \Glpi\Asset\Asset::class, true)) {
                continue;
            }

            $shortName = (new \ReflectionClass($assetClass))->getShortName();

            $adapterClass = 'PluginDatainjection' . $shortName . 'Injection';

            self::createAdapterClass($assetClass, $adapterClass);

            if (class_exists($adapterClass)) {
                /*
                 * Data Injection uses get_parent_class() as the
                 * actual itemtype key.
                 */
                $injectableTypes[$adapterClass] = 'datainjection';
            }
        }
    }

    /**
     * Dynamically create an adapter derived from the actual
     * GLPI Custom Asset class.
     */
    private static function createAdapterClass(
        string $assetClass,
        string $adapterClass
    ) {
        if (class_exists($adapterClass, false)) {
            return;
        }

        $escapedParent = '\\' . ltrim($assetClass, '\\');

        $code = <<<PHP
class {$adapterClass} extends {$escapedParent}
    implements \\PluginDatainjectionInjectionInterface
{
    public static function getTable(\$classname = null)
    {
        return parent::getTable();
    }

    public function isPrimaryType()
    {
        return true;
    }

    public function connectedTo()
    {
        return [];
    }

    public function isNullable(\$field)
    {
        return true;
    }

    public function getOptions(\$primary_type = '')
    {
        \$baseOptions = parent::getOptions();

        /*
         * Standard GLPI fields are processed by Data Injection's
         * normal helper.
         */
        \$options = [
            'ignore_fields' => [],
            'displaytype'   => [],
            'checktype'     => [],
        ];

        \$result = PluginDatainjectionCommonInjectionLib::addToSearchOptions(
            \$baseOptions,
            \$options,
            \$this
        );

        /*
         * Custom Asset fields have search option IDs >= 45000.
         * Data Injection normally ignores IDs >= 1000, so append
         * them AFTER addToSearchOptions().
         */
        foreach (\$baseOptions as \$id => \$option) {
            if ((int) \$id < 45000) {
                continue;
            }

            if (!isset(\$option['field_definition'])) {
                continue;
            }

            \$definition = \$option['field_definition'];

            if (!isset(\$definition->fields['id'])) {
                continue;
            }

            \$fieldId = (int) \$definition->fields['id'];

            \$systemName = \$definition->fields['system_name'] ?? '';

            \$label = \$definition->fields['label']
                ?? \$option['name']
                ?? ('Custom field ' . \$fieldId);

            if (\$systemName === '') {
                continue;
            }

            \$linkField = 'custom_' . \$systemName;

            \$result[\$id] = [
                'name'              => \$label,
                'table'             => self::getTable(),
                'field'             => \$linkField,
                'linkfield'         => \$linkField,
                'injectable'        => PluginDatainjectionCommonInjectionLib::FIELD_INJECTABLE,
                'checktype'         => 'text',
                'displaytype'       => 'text',
                'datatype'          => 'string',
                'custom_asset_field'=> true,
                'custom_field_id'   => \$fieldId,
                'custom_system_name'=> \$systemName,
            ];
        }

        return \$result;
    }

    /**
     * Import/update a Custom Asset.
     *
     * Data Injection sends values using custom_<system_name>.
     * Convert these values into GLPI's native custom_fields
     * array and let Asset::prepareInputForAdd/Update() perform
     * the normal JSON serialization.
     */
    public function customimport(\$input = [], \$add = true, \$rights = [])
    {
        \$assetInput = \$input;

        \$customFields = [];

        foreach (\$this->getOptions() as \$id => \$option) {
            if (!isset(\$option['custom_asset_field'])) {
                continue;
            }

            \$fieldId = (int) \$option['custom_field_id'];
            \$linkField = \$option['linkfield'];

            if (array_key_exists(\$linkField, \$assetInput)) {
                \$customFields[\$fieldId] = \$assetInput[\$linkField];
                unset(\$assetInput[\$linkField]);
            }
        }

        if (count(\$customFields)) {
            \$assetInput['custom_fields'] = \$customFields;
        }

        \$asset = new static();

        /*
         * Remove Data Injection-only metadata.
         */
        unset(
            \$assetInput['custom_asset_field'],
            \$assetInput['custom_field_id'],
            \$assetInput['custom_system_name']
        );

        if (\$add) {
            \$newID = \$asset->add(\$assetInput);

            if (\$newID) {
                return \$newID;
            }

            return false;
        }

        if (!isset(\$assetInput['id']) || !(int)\$assetInput['id']) {
            return false;
        }

        \$asset->getFromDB((int) \$assetInput['id']);

        if (!\$asset->isLoaded()) {
            return false;
        }

        if (\$asset->update(\$assetInput)) {
            return (int) \$assetInput['id'];
        }

        return false;
    }
}
PHP;

        try {
            eval($code);
        } catch (\Throwable $e) {
            error_log(
                'Custom Asset Data Injection adapter error: '
                . $e->getMessage()
            );
        }
    }
}
