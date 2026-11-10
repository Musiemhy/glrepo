<?php
if (!function_exists('servicecatalog_render_navigation')) {
    function servicecatalog_render_navigation(string $current): void {
        global $CFG_GLPI;
        $root = rtrim($CFG_GLPI['root_doc'] ?? '/glpi', '/') . '/front/plugin_servicecatalog.php';
        $pages = ['config' => 'Service Teams', 'categories' => 'Service Categories', 'types' => 'Service Types', 'items' => 'Service Items', 'selector' => 'Open a ticket'];
        echo '<div class="card mb-4"><div class="card-body"><nav class="nav nav-pills flex-wrap gap-2">';
        foreach ($pages as $key => $label) {
            $active = ($key === $current) ? 'active' : '';
            echo '<a class="nav-link ' . $active . '" href="' . $root . '?page=' . $key . '">' . $label . '</a>';
        }
        echo '</nav></div></div>';
    }
}
