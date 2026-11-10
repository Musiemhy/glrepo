<?php
class PluginServicecatalogTicketsMenu extends CommonGLPI
{
    public static function getTypeName($nb = 0) { return __('Incidents & Requests', 'servicecatalog'); }
    public static function getMenuName() { return __('Incidents & Requests', 'servicecatalog'); }
    public static function getIcon() { return 'ti ti-ticket'; }

    public static function getMenuContent()
    {
        $incidentList = '/front/plugin_servicecatalog.php?page=incidents';
        $requestList  = '/front/plugin_servicecatalog.php?page=requests';
        $incidentCreate = '/Form/Render/1';
        $requestCreate  = '/Form/Render/2';

        return [
            'title' => self::getMenuName(),
            'page'  => $incidentList,
            'icon'  => self::getIcon(),
            'links' => [
                'menu' => [
                    'incidents' => [
                        'name' => __('Incidents', 'servicecatalog'),
                        'page' => $incidentList,
                        'icon' => 'ti ti-alert-triangle',
                    ],
                    'requests' => [
                        'name' => __('Requests', 'servicecatalog'),
                        'page' => $requestList,
                        'icon' => 'ti ti-help-circle',
                    ],
                ],
                'option' => [
                    'create_incident' => [
                        'name' => __('Create Incident', 'servicecatalog'),
                        'page' => $incidentCreate,
                        'icon' => 'ti ti-plus',
                    ],
                    'create_request' => [
                        'name' => __('Create Request', 'servicecatalog'),
                        'page' => $requestCreate,
                        'icon' => 'ti ti-plus',
                    ],
                ]
            ],
        ];
    }
}
