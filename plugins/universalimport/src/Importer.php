<?php

class PluginUniversalimportImporter
{
    public static function getTargets(): array
    {
        global $CFG_GLPI;

        $targets = [
            'Computer'          => Computer::getTypeName(1),
            'Monitor'           => Monitor::getTypeName(1),
            'NetworkEquipment'  => NetworkEquipment::getTypeName(1),
            'Peripheral'        => Peripheral::getTypeName(1),
            'Printer'           => Printer::getTypeName(1),
            'Phone'             => Phone::getTypeName(1),
            'Rack'              => Rack::getTypeName(1),
            'Enclosure'         => Enclosure::getTypeName(1),
            'PDU'               => PDU::getTypeName(1),
            'PassiveDCEquipment'=> PassiveDCEquipment::getTypeName(1),
            'Cable'             => Cable::getTypeName(1),
            'User'              => User::getTypeName(1),
        ];

        if (class_exists('CartridgeItem')) {
            $targets['CartridgeItem'] = CartridgeItem::getTypeName(1);
        }
        if (class_exists('ConsumableItem')) {
            $targets['ConsumableItem'] = ConsumableItem::getTypeName(1);
        }

        if (class_exists('\Glpi\Asset\AssetDefinitionManager')) {
            $manager = \Glpi\Asset\AssetDefinitionManager::getInstance();
            foreach ($manager->getDefinitions() as $definition) {
                if (!$definition->isActive()) {
                    continue;
                }
                $class = $definition->getAssetClassName();
                $targets[$class] = $definition->fields['label'] ?: $definition->fields['system_name'];
            }
        }

        return $targets;
    }

    public static function getFields(string $itemtype): array
    {
        if ($itemtype === 'User') {
            return [
                'name'       => 'Login / username',
                'firstname'  => 'First name',
                'realname'   => 'Surname / real name',
                'email'      => 'Email',
                'phone'      => 'Phone',
                'mobile'     => 'Mobile',
                'comment'    => 'Comment',
                'entities_id'=> 'Entity',
                'is_active'  => 'Active (1/0)',
            ];
        }

        if (!class_exists($itemtype) || !is_subclass_of($itemtype, \CommonDBTM::class)) {
            return [];
        }

        // Custom Asset classes — use AssetDefinitionManager.
        if (str_starts_with($itemtype, 'Glpi\\CustomAsset\\')
            && class_exists('\Glpi\Asset\AssetDefinitionManager')) {
            $manager = \Glpi\Asset\AssetDefinitionManager::getInstance();
            foreach ($manager->getDefinitions() as $definition) {
                if ($definition->getAssetClassName() !== $itemtype) {
                    continue;
                }

                $fields = [
                    'name'                  => 'Name',
                    'comment'               => 'Comment',
                    'entities_id'           => 'Entity',
                    'assets_assettypes_id'  => 'Asset type',
                    'assets_assetmodels_id' => 'Asset model',
                    'locations_id'          => 'Location',
                    'manufacturers_id'      => 'Manufacturer',
                    'users_id'              => 'User',
                    'groups_id'             => 'Group',
                    'users_id_tech'         => 'Technician',
                    'groups_id_tech'        => 'Technician group',
                    'states_id'             => 'Status',
                    'serial'                => 'Serial number',
                    'otherserial'           => 'Inventory number',
                    'uuid'                  => 'UUID',
                ];

                if (method_exists($definition, 'getAllFields')) {
                    foreach ($definition->getAllFields() as $key => $meta) {
                        $fields[$key] = $meta['text'] ?? $key;
                    }
                }
                return $fields;
            }

            return [
                'name'                  => 'Name',
                'comment'               => 'Comment',
                'entities_id'           => 'Entity',
                'assets_assettypes_id'  => 'Asset type',
                'assets_assetmodels_id' => 'Asset model',
                'locations_id'          => 'Location',
                'manufacturers_id'      => 'Manufacturer',
                'states_id'             => 'Status',
            ];
        }

        // Core assets
        $obj = new $itemtype();
        $fields = [];

        if (method_exists($obj, 'getSearchOptions')) {
            try {
                foreach ($obj->getSearchOptions() as $opt) {
                    if (!is_array($opt) || !isset($opt['field'], $opt['name'])) {
                        continue;
                    }
                    if (!$obj->isField($opt['field'])) {
                        continue;
                    }
                    if (in_array($opt['field'], ['id', 'date_creation', 'date_mod', 'is_deleted'], true)) {
                        continue;
                    }
                    $fields[$opt['field']] = $opt['name'];
                }
            } catch (Throwable $e) {
                // Fall through to defaults
            }
        }

        $defaults = [
            'name'            => 'Name',
            'serial'          => 'Serial number',
            'otherserial'     => 'Inventory number',
            'uuid'            => 'UUID',
            'comment'         => 'Comment',
            'entities_id'     => 'Entity',
            'locations_id'    => 'Location',
            'manufacturers_id'=> 'Manufacturer',
            'users_id'        => 'User',
            'groups_id'       => 'Group',
            'users_id_tech'   => 'Technician',
            'groups_id_tech'  => 'Technician group',
            'states_id'       => 'Status',
        ];
        foreach ($defaults as $k => $label) {
            if ($obj->isField($k) && !isset($fields[$k])) {
                $fields[$k] = $label;
            }
        }

        return $fields;
    }

    public static function readFile(string $path, string $originalName = ''): array
    {
        if (!is_file($path)) {
            throw new RuntimeException('Uploaded file not found.');
        }

        $ext = strtolower(pathinfo($originalName !== '' ? $originalName : $path, PATHINFO_EXTENSION));

        if ($ext === 'xlsx') {
            return self::readXlsx($path);
        }
        if ($ext === 'csv') {
            return self::readCsv($path);
        }

        $fh = fopen($path, 'rb');
        if (!$fh) {
            throw new RuntimeException('Unable to open uploaded file.');
        }
        $magic = fread($fh, 4);
        fclose($fh);

        if (substr($magic, 0, 2) === 'PK') {
            return self::readXlsx($path);
        }

        return self::readCsv($path);
    }

    private static function readCsv(string $path): array
    {
        $fh = fopen($path, 'rb');
        if (!$fh) {
            throw new RuntimeException('Unable to open uploaded file.');
        }

        $firstLine = fgets($fh);
        if ($firstLine === false) {
            fclose($fh);
            return [];
        }

        $firstLine = preg_replace('/^\xEF\xBB\xBF/', '', $firstLine);
        $delimiter = self::detectDelimiter($firstLine);

        fclose($fh);
        $fh = fopen($path, 'rb');
        if (!$fh) {
            throw new RuntimeException('Unable to open uploaded file.');
        }

        $headers = fgetcsv($fh, 0, $delimiter);
        if ($headers === false) {
            fclose($fh);
            return [];
        }
        if (isset($headers[0])) {
            $headers[0] = preg_replace('/^\xEF\xBB\xBF/', '', (string)$headers[0]);
        }
        $headers = array_map([self::class, 'cleanHeader'], $headers);

        $rows = [];
        while (($row = fgetcsv($fh, 0, $delimiter)) !== false) {
            if (count(array_filter($row, static fn($v) => trim((string)$v) !== '')) === 0) {
                continue;
            }
            $row = array_pad($row, count($headers), '');
            $rows[] = array_combine($headers, array_slice($row, 0, count($headers)));
        }
        fclose($fh);
        return $rows;
    }

    private static function detectDelimiter(string $line): string
    {
        $candidates = [',', ';', "\t", '|'];
        $best = ',';
        $bestCount = 0;
        foreach ($candidates as $d) {
            $count = substr_count($line, $d);
            if ($count > $bestCount) {
                $bestCount = $count;
                $best = $d;
            }
        }
        return $best;
    }

    private static function readXlsx(string $path): array
    {
        if (!class_exists('ZipArchive')) {
            throw new RuntimeException('PHP ZipArchive extension is required for XLSX imports.');
        }

        $zip = new ZipArchive();
        if ($zip->open($path) !== true) {
            throw new RuntimeException('Unable to open XLSX file.');
        }

        $ns = 'http://schemas.openxmlformats.org/spreadsheetml/2006/main';

        // ---- shared strings ----
        $shared = [];
        $sharedXml = $zip->getFromName('xl/sharedStrings.xml');
        if ($sharedXml !== false) {
            $sx = simplexml_load_string($sharedXml);
            if ($sx) {
                $items = isset($sx->si) ? $sx->si : $sx->children($ns)->si;
                foreach ($items as $si) {
                    $text = '';
                    $tNodes = isset($si->t) ? $si->t : $si->children($ns)->t;
                    foreach ($tNodes as $t) {
                        $text .= (string)$t;
                    }
                    $rNodes = isset($si->r) ? $si->r : $si->children($ns)->r;
                    foreach ($rNodes as $r) {
                        $rtNodes = isset($r->t) ? $r->t : $r->children($ns)->t;
                        foreach ($rtNodes as $rt) {
                            $text .= (string)$rt;
                        }
                    }
                    $shared[] = $text;
                }
            }
        }

        // ---- worksheet ----
        $sheet = $zip->getFromName('xl/worksheets/sheet1.xml');
        if ($sheet === false) {
            $zip->close();
            throw new RuntimeException('The XLSX file does not contain worksheet 1.');
        }

        $sx = simplexml_load_string($sheet);
        if (!$sx) {
            $zip->close();
            throw new RuntimeException('Invalid XLSX worksheet XML.');
        }

        $sheetData = isset($sx->sheetData) ? $sx->sheetData : $sx->children($ns)->sheetData;
        if (!$sheetData) {
            $zip->close();
            return [];
        }

        $rowNodes = isset($sheetData->row) ? $sheetData->row : $sheetData->children($ns)->row;

        $matrix = [];
        $maxCol = 0;
        foreach ($rowNodes as $r) {
            $cells = [];
            $cellNodes = isset($r->c) ? $r->c : $r->children($ns)->c;
            foreach ($cellNodes as $c) {
                $ref = (string)$c['r'];
                preg_match('/([A-Z]+)/', $ref, $m);
                $letters = $m[1] ?? 'A';
                $col = 0;
                for ($i = 0, $n = strlen($letters); $i < $n; $i++) {
                    $col = $col * 26 + (ord($letters[$i]) - 64);
                }
                $col--;

                $v = '';
                $vNode = isset($c->v) ? $c->v : $c->children($ns)->v;
                if ($vNode !== null) {
                    $v = (string)$vNode;
                }

                if ((string)$c['t'] === 's') {
                    $v = $shared[(int)$v] ?? '';
                } elseif ((string)$c['t'] === 'inlineStr') {
                    $isNode = isset($c->is) ? $c->is : $c->children($ns)->is;
                    if ($isNode) {
                        $tNode = isset($isNode->t) ? $isNode->t : $isNode->children($ns)->t;
                        $v = (string)$tNode;
                    }
                }

                $cells[$col] = $v;
                if ($col > $maxCol) {
                    $maxCol = $col;
                }
            }
            $matrix[] = $cells;
        }
        $zip->close();

        if (!$matrix) {
            return [];
        }

        // Pad every row to the same width
        foreach ($matrix as &$rowCells) {
            $rowCells = array_pad($rowCells, $maxCol + 1, '');
            ksort($rowCells);
            $rowCells = array_values($rowCells);
        }
        unset($rowCells);

        // Find the first non-empty row — that's our header
        $headerIdx = 0;
        for ($i = 0; $i < count($matrix); $i++) {
            if (count(array_filter($matrix[$i], static fn($v) => trim((string)$v) !== '')) > 0) {
                $headerIdx = $i;
                break;
            }
        }

        $headers = array_map([self::class, 'cleanHeader'], $matrix[$headerIdx]);
        $rows = [];
        for ($i = $headerIdx + 1; $i < count($matrix); $i++) {
            $row = array_pad($matrix[$i], count($headers), '');
            if (count(array_filter($row, static fn($v) => trim((string)$v) !== '')) === 0) {
                continue;
            }
            $rows[] = array_combine($headers, array_slice($row, 0, count($headers)));
        }
        return $rows;
    }

    private static function cleanHeader($value): string
    {
        $value = trim((string)$value);
        return $value === '' ? 'column_' . substr(md5(uniqid('', true)), 0, 6) : $value;
    }

    public static function resolveId(string $itemtype, string $field, $value, string $mode = 'create', array &$warnings = []): ?int
    {
        $value = trim((string)$value);
        if ($value === '') {
            return null;
        }
        if (ctype_digit($value)) {
            return (int)$value;
        }

        $class = self::getDropdownClassForField($itemtype, $field);
        if ($class === null) {
            $warnings[] = sprintf('Field "%s" is not a dropdown; cannot resolve "%s".', $field, $value);
            return null;
        }

        $obj = new $class();
        global $DB;

        try {
            if ($obj->getFromDBByCrit(['name' => $value])) {
                return (int)$obj->getID();
            }
        } catch (Throwable $e) {
            // continue
        }

        $table = $obj->getTable();
        $iterator = $DB->request([
            'SELECT' => 'id',
            'FROM'   => $table,
            'WHERE'  => ['name' => ['LIKE', $value]],
            'LIMIT'  => 1,
        ]);
        foreach ($iterator as $row) {
            return (int)$row['id'];
        }

        if ($mode === 'create') {
            $newId = $obj->add([
                'name'         => $value,
                'entities_id'  => 0,
                'is_recursive' => 1,
            ]);
            if ($newId) {
                $warnings[] = sprintf('Created new %s "%s" (id %d).', $class, $value, $newId);
                return (int)$newId;
            }
            $warnings[] = sprintf('Failed to create %s "%s".', $class, $value);
            return null;
        }

        $warnings[] = sprintf('Could not resolve %s value "%s".', $field, $value);
        return null;
    }

    public static function getDropdownClassForField(string $itemtype, string $field): ?string
    {
        // ---- 1. Known core dropdown fields ----
        $knownMap = [
            'manufacturers_id' => 'Manufacturer',
            'locations_id'     => 'Location',
            'states_id'        => 'State',
            'users_id'         => 'User',
            'users_id_tech'    => 'User',
            'groups_id'        => 'Group',
            'groups_id_tech'   => 'Group',
            'entities_id'      => 'Entity',
            'suppliers_id'     => 'Supplier',
            'budgets_id'       => 'Budget',
            'networks_id'      => 'Network',
            'domains_id'       => 'Domain',
            'computermodels_id'=> 'ComputerModel',
            'computertypes_id' => 'ComputerType',
            'monitormodels_id' => 'MonitorModel',
            'monitortypes_id'  => 'MonitorType',
            'netequipmentmodels_id' => 'NetworkEquipmentModel',
            'netequipmenttypes_id'  => 'NetworkEquipmentType',
            'printermodels_id' => 'PrinterModel',
            'printertypes_id'  => 'PrinterType',
            'peripheralmodels_id' => 'PeripheralModel',
            'peripheraltypes_id'  => 'PeripheralType',
            'phonemodels_id'   => 'PhoneModel',
            'phonetypes_id'    => 'PhoneType',
            'autoupdatesystems_id' => 'AutoUpdateSystem',
            'operatingsystems_id'  => 'OperatingSystem',
            'operatingsystemversions_id' => 'OperatingSystemVersion',
            'operatingsystemarchitectures_id' => 'OperatingSystemArchitecture',
        ];

        if (isset($knownMap[$field]) && class_exists($knownMap[$field])) {
            return $knownMap[$field];
        }

        // ---- 2. GLPI 11 Custom Asset dropdowns (concrete runtime classes) ----
        if (($field === 'assets_assettypes_id' || $field === 'assets_assetmodels_id')
            && class_exists('\Glpi\Asset\AssetDefinitionManager')
            && str_starts_with($itemtype, 'Glpi\\CustomAsset\\')) {

            $manager = \Glpi\Asset\AssetDefinitionManager::getInstance();
            foreach ($manager->getDefinitions() as $definition) {
                if ($definition->getAssetClassName() !== $itemtype) {
                    continue;
                }
                $candidate = ($field === 'assets_assettypes_id')
                    ? $definition->getAssetTypeClassName()
                    : $definition->getAssetModelClassName();

                if (class_exists($candidate)) {
                    return $candidate;
                }
            }
        }

        // ---- 3. Fall back to search options (guarded) ----
        if (class_exists($itemtype) && is_subclass_of($itemtype, \CommonDBTM::class)) {
            $obj = new $itemtype();
            if (method_exists($obj, 'getSearchOptions')) {
                try {
                    foreach ($obj->getSearchOptions() as $opt) {
                        if (!is_array($opt) || ($opt['field'] ?? null) !== $field) {
                            continue;
                        }
                        if (!empty($opt['table'])) {
                            $class = \CommonDBTM::getItemTypeForTable($opt['table']);
                            if ($class && class_exists($class)) {
                                return $class;
                            }
                        }
                    }
                } catch (Throwable $e) {
                    // ignore
                }
            }
        }

        // ---- 4. Name-based guess ----
        if (str_ends_with($field, '_id')) {
            $guess = str_replace('_id', '', $field);
            $guess = str_replace(' ', '', ucwords(str_replace('_', ' ', $guess)));
            foreach ([$guess, $guess . 'Type', $guess . 'Model'] as $candidate) {
                if (class_exists($candidate)) {
                    return $candidate;
                }
            }
        }
        return null;
    }

    public static function duplicateId(string $itemtype, array $input): ?int
    {
        if ($itemtype === 'User') {
            if (!empty($input['name'])) {
                $u = new User();
                if ($u->getFromDBByCrit(['name' => $input['name']])) {
                    return (int)$u->getID();
                }
            }
            return null;
        }

        if (!empty($input['serial']) && class_exists($itemtype)) {
            $obj = new $itemtype();
            $found = $obj->find(['serial' => $input['serial']], '', 1);
            foreach ($found as $row) {
                return (int)$row['id'];
            }
        }
        if (!empty($input['uuid']) && class_exists($itemtype)) {
            $obj = new $itemtype();
            $found = $obj->find(['uuid' => $input['uuid']], '', 1);
            foreach ($found as $row) {
                return (int)$row['id'];
            }
        }
        return null;
    }

    public static function normalizeInput(string $itemtype, array $input, string $dropdownMode, array &$warnings): array
    {
        foreach ($input as $field => $value) {
            if ($field === 'entities_id') {
                continue;
            }
            if (!str_ends_with($field, '_id')) {
                continue;
            }
            if ($value === '' || $value === null) {
                continue;
            }

            $resolved = self::resolveId($itemtype, $field, $value, $dropdownMode, $warnings);
            if ($resolved === null) {
                unset($input[$field]);
            } else {
                $input[$field] = $resolved;
            }
        }

        if ($itemtype === 'User' && isset($input['is_active'])) {
            $input['is_active'] = (int)((string)$input['is_active'] !== '0');
        }

        return $input;
    }

    public static function import(string $itemtype, array $rows, array $mapping, string $duplicateMode, string $dropdownMode = 'create'): array
    {
        $result = [
            'total'    => count($rows),
            'created'  => 0,
            'updated'  => 0,
            'skipped'  => 0,
            'errors'   => [],
            'warnings' => [],
        ];

        if (!class_exists($itemtype)) {
            throw new RuntimeException('Target class does not exist: ' . $itemtype);
        }

        $entity = Session::getActiveEntity();
        $isUser = $itemtype === 'User';

        foreach ($rows as $index => $row) {
            $line = $index + 2;
            try {
                $input = [];
                foreach ($mapping as $source => $target) {
                    if ($target === '' || !array_key_exists($source, $row)) {
                        continue;
                    }
                    $value = trim((string)$row[$source]);
                    if ($value !== '') {
                        $input[$target] = $value;
                    }
                }

                if ($input === []) {
                    $result['skipped']++;
                    continue;
                }

                if (!$isUser && !isset($input['entities_id'])) {
                    $input['entities_id'] = $entity;
                }

                $warnings = [];
                $input = self::normalizeInput($itemtype, $input, $dropdownMode, $warnings);
                foreach ($warnings as $w) {
                    $result['warnings'][] = "Row {$line}: {$w}";
                }

                $duplicateId = self::duplicateId($itemtype, $input);
                if ($duplicateId !== null) {
                    if ($duplicateMode === 'skip') {
                        $result['skipped']++;
                        continue;
                    }
                    if ($duplicateMode === 'update') {
                        $input['id'] = $duplicateId;
                        $obj = new $itemtype();
                        if (!$obj->update($input)) {
                            throw new RuntimeException('Update failed.');
                        }
                        $result['updated']++;
                        continue;
                    }
                }

                $obj = new $itemtype();
                if ($obj->add($input) === false) {
                    throw new RuntimeException('Create failed. Check GLPI permissions and field values.');
                }
                $result['created']++;
            } catch (Throwable $e) {
                $result['errors'][] = "Row {$line}: " . $e->getMessage();
            }
        }

        return $result;
    }
}
