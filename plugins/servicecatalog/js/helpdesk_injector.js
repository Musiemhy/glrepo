(function () {
    'use strict';
    
    const path = window.location.pathname;
    // Only run on the Self-Service homepage
    if (!path.endsWith('/front/helpdesk.public.php') && !path.endsWith('/front/central.php')) {
        return;
    }

    document.addEventListener("DOMContentLoaded", function() {
        // 1. Find the container that holds the default tiles
        // GLPI 11 uses a grid with class 'row-deck' or 'helpdesk-dashboard'
        const target = document.querySelector('.helpdesk-dashboard') || document.querySelector('.row-deck');
        
        if (target) {
            // Hide the default GLPI blocks to replace them
            target.style.display = 'none';

            // 2. Create our custom modern layout
            const customHtml = `
            <style>
                .itsm-portal { padding: 2rem 1rem; }
                .itsm-card {
                    background: #fff; border-radius: 12px; border: 1px solid #e6e7e9;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.04); transition: all 0.2s ease;
                    text-decoration: none; color: inherit; display: block; height: 100%;
                }
                .itsm-card:hover {
                    transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,0.08);
                    border-color: #206bc4;
                }
                .itsm-card .icon-wrapper {
                    width: 48px; height: 48px; border-radius: 10px;
                    display: flex; align-items: center; justify-content: center;
                    font-size: 1.5rem; margin-bottom: 1rem;
                }
                .itsm-card h4 { font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem; }
                .itsm-card p { font-size: 0.85rem; color: #6c757d; margin: 0; line-height: 1.4; }
            </style>

            <div class="itsm-portal container-fluid">
                <div class="text-center mb-4">
                    <h1 class="display-6 fw-bold mb-2">How can we help you today?</h1>
                    <p class="text-muted lead">Choose an option below to get started.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Create Incident -->
                    <div class="col-md-4 col-lg-3">
                        <a href="/glpi/Form/Render/1" class="itsm-card p-4">
                            <div class="icon-wrapper bg-red-lt text-red">
                                <i class="ti ti-alert-triangle"></i>
                            </div>
                            <h4>Report an Incident</h4>
                            <p>Something is broken? Let our IT team know immediately.</p>
                        </a>
                    </div>

                    <!-- Create Request -->
                    <div class="col-md-4 col-lg-3">
                        <a href="/glpi/Form/Render/2" class="itsm-card p-4">
                            <div class="icon-wrapper bg-green-lt text-green">
                                <i class="ti ti-help-circle"></i>
                            </div>
                            <h4>Request a Service</h4>
                            <p>Need access, software, or hardware? Submit a request.</p>
                        </a>
                    </div>

                    <!-- Service Catalog -->
                    <div class="col-md-4 col-lg-3">
                        <a href="/glpi/front/plugin_servicecatalog.php?page=selector" class="itsm-card p-4">
                            <div class="icon-wrapper bg-blue-lt text-blue">
                                <i class="ti ti-books"></i>
                            </div>
                            <h4>Service Catalog</h4>
                            <p>Browse all available IT services and request them easily.</p>
                        </a>
                    </div>

                    <!-- My Tickets -->
                    <div class="col-md-4 col-lg-3">
                        <a href="/glpi/front/ticket.php" class="itsm-card p-4">
                            <div class="icon-wrapper bg-orange-lt text-orange">
                                <i class="ti ti-list-details"></i>
                            </div>
                            <h4>My Tickets</h4>
                            <p>Track the status of your ongoing and past requests.</p>
                        </a>
                    </div>
                </div>
            </div>
            `;

            // Insert custom layout before the hidden default one
            target.parentNode.insertBefore(
                new DOMParser().parseFromString(customHtml, 'text/html').body.firstElementChild,
                target
            );
        }
    });
})();
