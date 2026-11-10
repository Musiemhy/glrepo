(function () {
    'use strict';
    
    if (!window.location.pathname.includes('/front/ticket.form.php')) return;
    console.log('[ServiceCatalog] Ticket Detail Script Loaded.');

    const urlParams = new URLSearchParams(window.location.search);
    const ticketId = urlParams.get('id');
    if (!ticketId) return;

    function injectUI() {
        if (document.getElementById('sc-ticket-edit')) return;

        // Find the exact element that contains the word "Category"
        let categoryLabel = null;
        const elements = Array.from(document.querySelectorAll('div, span, label, td'));
        for (let el of elements) {
            if (el.children.length === 0 && el.textContent.trim() === 'Category') {
                categoryLabel = el;
                break;
            }
        }

        if (!categoryLabel) {
            console.log('[ServiceCatalog] Still waiting for Category field...');
            return;
        }

        console.log('[ServiceCatalog] Found Category field. Injecting UI.');

        // Find the container that holds the label and the value
        const row = categoryLabel.closest('.row') || categoryLabel.closest('.mb-3') || categoryLabel.parentElement;
        if (!row) return;

        const container = document.createElement('div');
        container.id = 'sc-ticket-edit';
        container.className = 'mt-3 p-3 bg-light border rounded';
        container.innerHTML = '<div class="text-muted small"><i class="ti ti-loader ti-spin"></i> Loading Service Catalog...</div>';
        
        // Inject right after the row
        row.parentNode.insertBefore(container, row.nextSibling);

        fetch('/glpi/plugins/servicecatalog/ajax/getTicketServices.php?id=' + ticketId, { credentials: 'same-origin' })
            .then(r => r.json())
            .then(data => {
                if (!data.items_id) {
                    container.innerHTML = '<div class="text-muted small">No Service Catalog item mapped to this ticket.</div>';
                    return;
                }

                let optionsHtml = '';
                if (data.all_items) {
                    data.all_items.forEach(item => {
                        const selected = item.id == data.items_id ? 'selected' : '';
                        optionsHtml += `<option value="${item.id}" ${selected}>${item.name}</option>`;
                    });
                }

                container.innerHTML = `
                    <h5 class="mb-2"><i class="ti ti-headset"></i> Service Catalog</h5>
                    <div class="mb-1 small"><strong>Team:</strong> ${data.team_name}</div>
                    <div class="mb-1 small"><strong>Category:</strong> ${data.cat_name}</div>
                    <div class="mb-1 small"><strong>Type:</strong> ${data.type_name}</div>
                    <div class="mb-2 mt-3">
                        <label class="form-label small text-muted mb-1">Update Service Item:</label>
                        <select class="form-select form-select-sm mb-2" id="sc-edit-item-select">
                            ${optionsHtml}
                        </select>
                        <button class="btn btn-sm btn-primary w-100" type="button" onclick="saveScItem(${ticketId}, this)">
                            <i class="ti ti-device-floppy"></i> Save Item
                        </button>
                    </div>
                `;
            })
            .catch(e => {
                console.error('[ServiceCatalog] Fetch error:', e);
                container.innerHTML = '<div class="text-danger small">Error loading Service Catalog data.</div>';
            });
    }

    let attempts = 0;
    const interval = setInterval(() => {
        injectUI();
        attempts++;
        if (attempts > 20) clearInterval(interval);
    }, 500);

    window.saveScItem = function(ticketId, btn) {
        const select = document.getElementById('sc-edit-item-select');
        const itemId = select.value;
        
        btn.disabled = true;
        btn.innerHTML = '<i class="ti ti-loader ti-spin"></i> Saving...';

        const formData = new FormData();
        formData.append('ticket_id', ticketId);
        formData.append('item_id', itemId);
        
        fetch('/glpi/plugins/servicecatalog/ajax/updateTicketServices.php', {
            method: 'POST',
            body: formData,
            credentials: 'same-origin'
        })
        .then(r => r.json())
        .then(res => {
            if (res.success) {
                window.location.reload();
            } else {
                alert('Failed to update. Please try again.');
                btn.disabled = false;
                btn.innerHTML = 'Save Item';
            }
        });
    };
})();
