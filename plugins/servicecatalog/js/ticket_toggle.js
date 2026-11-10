console.log('[ServiceCatalog] Ticket Toggle Script Loaded!');

(function () {
    'use strict';
    
    // Check if we are on the ticket list page
    if (!window.location.href.includes('/front/ticket.php')) {
        console.log('[ServiceCatalog] Not on ticket.php, skipping.');
        return;
    }

    const prefix = window.location.pathname.substring(0, window.location.pathname.indexOf('/front/ticket.php'));
    const loader = prefix + '/front/plugin_servicecatalog.php';

    function injectButtons() {
        // If buttons already exist, stop
        if (document.getElementById('sc-toggle-btns')) return;

        // Find a valid container (Helpdesk uses .page-body, Central uses .page-body or .container-fluid)
        const target = document.querySelector('.page-body') || document.querySelector('#page') || document.body;
        
        if (!target) return;

        const container = document.createElement('div');
        container.id = 'sc-toggle-btns';
        container.className = 'mb-3 mt-2 container-fluid';
        container.innerHTML = `
            <div class="btn-group shadow-sm" role="group">
                <a href="${loader}?page=incidents" class="btn btn-danger fw-bold">
                    <i class="ti ti-alert-triangle me-1"></i> Incidents
                </a>
                <a href="${loader}?page=requests" class="btn btn-white text-success border border-success">
                    <i class="ti ti-help-circle me-1"></i> Requests
                </a>
            </div>
        `;

        // Insert at the very top of the page body
        target.insertBefore(container, target.firstChild);
        console.log('[ServiceCatalog] Buttons injected successfully.');
    }

    // 1. Try immediately
    injectButtons();
    
    // 2. Try when DOM is ready
    document.addEventListener("DOMContentLoaded", injectButtons);
    
    // 3. Try continuously for 5 seconds (in case GLPI loads the table via AJAX)
    const interval = setInterval(injectButtons, 500);
    setTimeout(() => clearInterval(interval), 5000);

    // 4. Watch for DOM changes
    const observer = new MutationObserver(() => {
        injectButtons();
    });
    observer.observe(document.body, { childList: true, subtree: true });

})();
