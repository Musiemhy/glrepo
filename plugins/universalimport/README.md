# Universal Asset & Data Importer for GLPI 11.0.9

A custom GLPI 11 plugin designed to import native assets, GLPI 11 custom Asset Definition assets, and users from CSV/XLSX.

## Supported targets

- Native GLPI assets such as Computer, Monitor, Network Equipment, Printer, Phone, Rack, Enclosure, PDU, Passive DC Equipment and Cable.
- Custom assets created with GLPI 11 Asset Definitions. The plugin discovers active definitions dynamically.
- Users.

## Supported files

- CSV
- XLSX

The XLSX reader is dependency-free and uses PHP ZipArchive/SimpleXML.

## Main workflow

1. Tools -> Universal Asset & Data Importer.
2. Select the target asset/user/custom asset.
3. Upload CSV/XLSX.
4. Map source columns to GLPI fields.
5. Select duplicate behavior.
6. Start import.
7. Review created/updated/skipped/error/warning counts.

## Custom Asset Definitions

The importer does not hard-code ATM, POS, Car, etc. It reads GLPI 11 Asset Definitions through:

`Glpi\Asset\AssetDefinitionManager`

For each active definition it uses the generated custom asset class and `AssetDefinition::getAllFields()`, including custom fields.

This means a new Asset Definition can become importable without modifying this plugin.

## Important

This is version 1.0.0 / foundation release. Before production use, test it on a clone of your GLPI database.

Recommended future modules:

- reusable import profiles/templates
- downloadable templates generated from Asset Definitions
- advanced foreign-key creation rules
- import job history stored in plugin tables
- scheduled imports
- REST API
- dry-run validation
- per-row transaction controls
- import rollback
- richer XLSX workbook support
- LDAP/user synchronization
- relationship imports (components, network ports, contracts, documents)
