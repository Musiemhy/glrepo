(function () {
    'use strict';
    const path = window.location.pathname;
    const basePath = path.substring(0, path.indexOf('/front/') !== -1 ? path.indexOf('/front/') : path.indexOf('/Form/'));
    const AJAX = basePath + '/plugins/servicecatalog/ajax';

    function parseCustomData(raw) {
        if (!raw) return {};
        if (typeof raw === 'object') return raw;
        try { return JSON.parse(raw); }
        catch(e) {
            try { return JSON.parse(raw.replace(/\\\//g, '/')); }
            catch(e2) {
                const result = {};
                const regex = /"([^"]+)"\s*:\s*"?([^",}]*)"?/g;
                let match;
                while ((match = regex.exec(raw)) !== null) result[match[1]] = match[2];
                return result;
            }
        }
    }

    function getFieldValue(data, fieldName, fieldLabel, index) {
        if (!data) return '';
        const norm = (s) => String(s || '').toLowerCase().replace(/[^a-z0-9]/g, '');
        const nName = norm(fieldName);
        const nLabel = norm(fieldLabel);
        if (Array.isArray(data)) {
            const found = data.find(x => x && (norm(x.name) === nName || norm(x.key) === nName || norm(x.label) === nLabel));
            if (found) return found.value !== undefined ? found.value : (found.val !== undefined ? found.val : '');
            return '';
        }
        for (const k in data) if (norm(k) === nName || norm(k) === nLabel) return data[k];
        if (data[fieldName] !== undefined) return data[fieldName];
        if (fieldLabel && data[fieldLabel] !== undefined) return data[fieldLabel];
        return '';
    }

    function populateGlpiDropdown(sel, itemtype, wantedVal) {
        if (!itemtype) return;
        sel.innerHTML = '<option value="">Loading...</option>';
        fetch(AJAX + '/getGlpiDropdown.php?itemtype=' + encodeURIComponent(itemtype), { credentials: 'same-origin' })
            .then(r => { if (!r.ok) throw new Error('HTTP ' + r.status); return r.json(); })
            .then(data => {
                sel.innerHTML = '<option value="">— Select —</option>';
                let rows = [];
                if (Array.isArray(data)) rows = data;
                else if (data && Array.isArray(data.data)) rows = data.data;
                else if (data && Array.isArray(data.results)) rows = data.results;
                else if (data && typeof data === 'object') Object.keys(data).forEach(k => rows.push({ id: k, name: data[k] }));
                let found = false;
                const matchVal = String(wantedVal || '').trim().toLowerCase();
                rows.forEach(opt => {
                    const o = new Option(opt.name || opt.text || opt.label, opt.id || opt.value);
                    if (wantedVal !== undefined && wantedVal !== null && wantedVal !== '') {
                        if (String(opt.id || opt.value) === String(wantedVal) || String(opt.name || opt.text || opt.label).trim().toLowerCase() === matchVal) {
                            o.selected = true; found = true;
                        }
                    }
                    sel.add(o);
                });
                if (!found && wantedVal !== undefined && wantedVal !== null && wantedVal !== '') {
                    const m = new Option(`[Missing] ${wantedVal}`, wantedVal); m.selected = true; sel.add(m);
                }
            })
            .catch(err => {
                console.error('[ServiceCatalog] Failed to load dropdown ' + itemtype, err);
                sel.innerHTML = '<option value="">— Error loading ' + itemtype + ' —</option>';
            });
    }

    function renderConditionalFields(container, field, rawVal, initialData, onChange) {
        let conds = field.conditions;
        if (typeof conds === 'string') { try { conds = JSON.parse(conds); } catch(e){} }
        const condContainer = document.createElement('div');
        condContainer.className = 'sc-cond-container mt-2 p-2 border-start border-3 border-primary bg-light d-none';
        container.appendChild(condContainer);
        if (!conds || typeof conds !== 'object') return { condContainer, renderSubFields: () => {} };
        const renderSubFields = (val) => {
            condContainer.querySelectorAll('.sc-cf').forEach(el => { if (el.dataset.name) onChange({ target: el }); });
            condContainer.innerHTML = ''; condContainer.classList.add('d-none');
            let matchedKey = null;
            const normalize = (s) => String(s || '').trim().toLowerCase();
            for (const k in conds) if (normalize(k) === normalize(val)) { matchedKey = k; break; }
            if (matchedKey && Array.isArray(conds[matchedKey])) {
                condContainer.classList.remove('d-none');
                conds[matchedKey].forEach(sub => {
                    const subDiv = document.createElement('div');
                    subDiv.className = 'mb-2';
                    subDiv.innerHTML = `<label class="form-label small">${sub.label}</label>`;
                    const subVal = getFieldValue(initialData, sub.name, sub.label, 0);
                    const fieldName = `plugin_servicecatalog_custom_fields[${sub.name}]`;
                    if (sub.type === 'glpi_dropdown') {
                        const subSel = document.createElement('select');
                        subSel.className = 'form-select form-select-sm sc-cf';
                        subSel.dataset.name = sub.name; subSel.name = fieldName;
                        subDiv.appendChild(subSel);
                        populateGlpiDropdown(subSel, sub.itemtype, subVal);
                    } else if (sub.type === 'custom_select' && sub.options) {
                        const subSel = document.createElement('select');
                        subSel.className = 'form-select form-select-sm sc-cf';
                        subSel.dataset.name = sub.name; subSel.name = fieldName;
                        subSel.innerHTML = '<option value="">— Select —</option>';
                        const mv = String(subVal).trim().toLowerCase();
                        sub.options.forEach(o => {
                            const opt = new Option(o, o);
                            if (String(o).trim().toLowerCase() === mv) opt.selected = true;
                            subSel.add(opt);
                        });
                        subDiv.appendChild(subSel);
                    } else {
                        const subInp = document.createElement('input');
                        subInp.type = sub.type || 'text';
                        subInp.className = 'form-control form-control-sm sc-cf';
                        subInp.dataset.name = sub.name; subInp.name = fieldName;
                        subInp.value = subVal || '';
                        subDiv.appendChild(subInp);
                    }
                    condContainer.appendChild(subDiv);
                });
                condContainer.querySelectorAll('.sc-cf').forEach(el => {
                    el.addEventListener('change', onChange); el.addEventListener('input', onChange);
                });
            }
        };
        return { condContainer, renderSubFields };
    }

    // ============================================================
    // SECTION 2 — Form/Render injector (unchanged)
    // ============================================================
    if (/\/Form\/Render\//.test(path)) {
        let formType = path.includes('/Form/Render/2') ? 2 : 1;
        let injected = false;
        function saveToCookie() {
            const tType = document.getElementById('sc_ticket_type');
            const team = document.getElementById('sc_team');
            const cat = document.getElementById('sc_category');
            const typ = document.getElementById('sc_type');
            const itm = document.getElementById('sc_item');
            if (!itm || !itm.value) return;
            let customData = {};
            document.querySelectorAll('input[name^="plugin_servicecatalog_custom_fields"], select[name^="plugin_servicecatalog_custom_fields"]').forEach(el => {
                const match = el.name.match(/\[(.*?)\]/);
                if (match) customData[match[1]] = el.value;
            });
            const scData = { ticket_type: tType ? tType.value : '', team: team ? team.value : '', cat: cat ? cat.value : '', type: typ ? typ.value : '', item: itm.value, custom: customData };
            document.cookie = "sc_selection=" + encodeURIComponent(JSON.stringify(scData)) + "; path=/; max-age=3600";
        }
        function injectForm() {
            if (injected) return;
            const titleInput = document.querySelector('input[aria-label="Title"]') || document.querySelector('input[name^="answers_"]');
            if (!titleInput) return;
            let wrapper = titleInput.closest('.card-body') || titleInput.closest('section') || titleInput.closest('.mb-3') || titleInput.parentElement;
            if (!wrapper) return;
            injected = true;
            fetch(AJAX + '/render_card.php?form_type=' + formType, { credentials: 'same-origin' })
                .then(r => r.text())
                .then(html => {
                    const holder = document.createElement('div'); holder.innerHTML = html;
                    const card = document.createElement('div');
                    card.className = 'card border-primary mb-3';
                    card.innerHTML = `
                        <div class="card-header py-2" style="background:#3a5693;color:#fff;font-weight:600;">
                            <i class="ti ti-headset"></i> Service Catalog
                        </div>
                        <div class="card-body py-3">
                            <div class="row g-3">
                                <div class="col-md-4" id="slot_type"></div>
                                <div class="col-md-4" id="slot_team"></div>
                                <div class="col-md-4" id="slot_category"></div>
                                <div class="col-md-4" id="slot_type2"></div>
                                <div class="col-md-4" id="slot_item"></div>
                                <div class="col-12" id="sc-custom-fields-container"></div>
                            </div>
                        </div>
                    `;
                    const grab = (id) => { const el = holder.querySelector('#' + id); return el ? (el.closest('.mb-3') || el.closest('.form-group') || el.parentElement) : null; };
                    const wType = grab('sc_ticket_type'); const wTeam = grab('sc_team'); const wCat = grab('sc_category'); const wType2 = grab('sc_type'); const wItem = grab('sc_item');
                    if (wType) card.querySelector('#slot_type').appendChild(wType);
                    if (wTeam) card.querySelector('#slot_team').appendChild(wTeam);
                    if (wCat) card.querySelector('#slot_category').appendChild(wCat);
                    if (wType2) card.querySelector('#slot_type2').appendChild(wType2);
                    if (wItem) card.querySelector('#slot_item').appendChild(wItem);
                    wrapper.parentNode.insertBefore(card, wrapper);
                    const tType = card.querySelector('#sc_ticket_type');
                    const team = card.querySelector('#sc_team');
                    const cat = card.querySelector('#sc_category');
                    const typ = card.querySelector('#sc_type');
                    const itm = card.querySelector('#sc_item');
                    const cfContainer = card.querySelector('#sc-custom-fields-container');
                    if (team && cat && typ && itm) {
                        function reset(sel) { sel.innerHTML = '<option value="">— Select —</option>'; sel.disabled = true; }
                        async function populate(sel, endpoint, key, value) {
                            reset(sel); if (!value) return;
                            try {
                                const r = await fetch(AJAX + '/' + endpoint + '?' + key + '=' + encodeURIComponent(value) + '&form_type=' + formType, { credentials: 'same-origin' });
                                const rows = await r.json();
                                rows.forEach(row => {
                                    const opt = new Option(row.name, row.id);
                                    if (row.itilcategories_id !== undefined) opt.setAttribute('data-itil', row.itilcategories_id);
                                    if (row.custom_fields !== undefined) opt.setAttribute('data-custom', row.custom_fields);
                                    sel.add(opt);
                                });
                                sel.disabled = rows.length === 0;
                            } catch(e) { reset(sel); }
                        }
                        if (tType) tType.addEventListener('change', () => {
                            reset(team); reset(cat); reset(typ); reset(itm); cfContainer.classList.add('d-none'); saveToCookie();
                            fetch(AJAX + '/getTeams.php?ticket_type=' + tType.value, { credentials: 'same-origin' }).then(r => r.json()).then(rows => {
                                team.innerHTML = '<option value="">— Select —</option>';
                                rows.forEach(row => team.add(new Option(row.name, row.id)));
                                team.disabled = rows.length === 0;
                            });
                        });
                        team.addEventListener('change', () => { reset(cat); reset(typ); reset(itm); cfContainer.classList.add('d-none'); saveToCookie(); populate(cat, 'getCategories.php', 'teams_id', team.value); });
                        cat.addEventListener('change', () => { reset(typ); reset(itm); cfContainer.classList.add('d-none'); saveToCookie(); populate(typ, 'getTypes.php', 'categories_id', cat.value); });
                        typ.addEventListener('change', () => { reset(itm); cfContainer.classList.add('d-none'); saveToCookie(); populate(itm, 'getItems.php', 'types_id', typ.value); });
                        itm.addEventListener('change', () => {
                            saveToCookie();
                            const selectedOption = itm.options[itm.selectedIndex];
                            const itilId = selectedOption.getAttribute('data-itil');
                            const customJson = selectedOption.getAttribute('data-custom');
                            if (itilId && parseInt(itilId) > 0) {
                                let nativeCat = document.querySelector('select[name="itilcategories_id"]');
                                if (!nativeCat) nativeCat = document.querySelector('select[aria-label*="Category" i]');
                                if (nativeCat) {
                                    nativeCat.value = itilId;
                                    if (nativeCat.tomselect) nativeCat.tomselect.setValue(itilId, true);
                                    else if (window.jQuery && jQuery(nativeCat).hasClass('select2-hidden-accessible')) jQuery(nativeCat).val(itilId).trigger('change.select2');
                                    else nativeCat.dispatchEvent(new Event('change', { bubbles: true }));
                                }
                            }
                            cfContainer.innerHTML = '<div class="col-12"><h4 class="mb-3">Additional Information</h4></div>';
                            const cfRow = document.createElement('div'); cfRow.className = 'row g-3 w-100'; cfContainer.appendChild(cfRow);
                            let cleanJson = customJson;
                            if (!cleanJson || cleanJson === 'null' || cleanJson === '""') cleanJson = '[]';
                            if (cleanJson !== '[]') {
                                try {
                                    const fields = JSON.parse(cleanJson);
                                    if (Array.isArray(fields) && fields.length > 0) {
                                        cfContainer.classList.remove('d-none');
                                        fields.forEach((field, index) => {
                                            const fName = field.name || ('field_' + index);
                                            const div = document.createElement('div');
                                            const isTextarea = field.type === 'textarea';
                                            div.className = isTextarea ? 'col-12 sc-cf-field-wrap' : 'col-md-3 sc-cf-field-wrap';
                                            div.innerHTML = `<label class="form-label fw-bold">${field.label}</label>`;
                                            if (field.type === 'readonly') div.innerHTML += `<div class="alert alert-info py-2 mb-0">${field.value || 'Read-only Info'}</div>`;
                                            else if (field.type === 'glpi_dropdown') {
                                                const sel = document.createElement('select');
                                                sel.className = 'form-select sc-glpi-dropdown';
                                                sel.name = `plugin_servicecatalog_custom_fields[${fName}]`;
                                                sel.dataset.name = fName;
                                                div.appendChild(sel);
                                            } else if (field.type === 'advanced_select') {
                                                let opts = Array.isArray(field.options) ? field.options : (field.options ? String(field.options).split(',') : []);
                                                let selHtml = `<select class="form-select sc-adv-select" data-name="${fName}" name="plugin_servicecatalog_custom_fields[${fName}]"><option value="">— Select —</option>`;
                                                opts.forEach(opt => selHtml += `<option value="${opt}">${opt}</option>`);
                                                selHtml += '</select>';
                                                div.innerHTML += selHtml;
                                                const { condContainer, renderSubFields } = renderConditionalFields(div, field, '', {}, () => saveToCookie());
                                                const sel = div.querySelector('select');
                                                sel.addEventListener('change', () => renderSubFields(sel.value));
                                                renderSubFields('');
                                            } else {
                                                div.innerHTML += `<input type="${field.type || 'text'}" name="plugin_servicecatalog_custom_fields[${fName}]" data-name="${fName}" class="form-control sc-cf">`;
                                            }
                                            cfRow.appendChild(div);
                                        });
                                        cfRow.querySelectorAll('.sc-glpi-dropdown').forEach((sel, idx) => {
                                            const field = fields.filter(f => f.type === 'glpi_dropdown')[idx];
                                            populateGlpiDropdown(sel, field.itemtype, '');
                                        });
                                        cfContainer.querySelectorAll('input, select').forEach(el => {
                                            el.addEventListener('change', saveToCookie); el.addEventListener('input', saveToCookie);
                                        });
                                    }
                                } catch (e) { console.error('[ServiceCatalog] JSON Error:', e); }
                            }
                        });
                    }
                });
        }
        const observer = new MutationObserver(injectForm);
        observer.observe(document.body, { childList: true, subtree: true });
        document.addEventListener('DOMContentLoaded', injectForm);
    }

    // ============================================================
    // SECTION 3 — Ticket form (sidebar + wide) — SAVE FIXED HERE
    // ============================================================
    if (path.includes('/front/ticket.form.php')) {
        const ticketId = new URLSearchParams(window.location.search).get('id');
        const isNew = !ticketId || ticketId === '0';

        function saveSelectionCookie(state) {
            document.cookie = "sc_selection=" + encodeURIComponent(JSON.stringify(state)) + "; path=/; max-age=3600";
        }
        const isId = (v) => v !== undefined && v !== null && String(v) !== '0' && String(v) !== '';

        function buildSidebarCustomFields(container, fields, initialData, onChange) {
            container.innerHTML = '';
            if (!Array.isArray(fields) || fields.length === 0) { container.style.display = 'none'; return; }
            container.style.display = 'block';
            container.innerHTML = '<h6 class="mt-4 mb-3" style="color:#d97706; font-weight:600;">Additional Information</h6>';
            fields.forEach((field, index) => {
                const fName = field.name || ('field_' + index);
                const wrap = document.createElement('div'); wrap.className = 'mb-3';
                const lbl = document.createElement('label'); lbl.className = 'form-label mb-1'; lbl.style.fontWeight = '500'; lbl.textContent = field.label;
                wrap.appendChild(lbl);
                const rawVal = getFieldValue(initialData, fName, field.label, index);
                if (field.type === 'readonly') {
                    const ro = document.createElement('div'); ro.className = 'alert alert-info py-1 px-2 mb-0 small'; ro.textContent = field.value || '';
                    wrap.appendChild(ro);
                } else if (field.type === 'glpi_dropdown') {
                    const sel = document.createElement('select');
                    sel.className = 'form-select sc-cf'; sel.dataset.name = fName; sel.name = `plugin_servicecatalog_custom_fields[${fName}]`; sel.dataset.itemtype = field.itemtype;
                    wrap.appendChild(sel); populateGlpiDropdown(sel, field.itemtype, rawVal);
                } else if (field.type === 'advanced_select') {
                    const opts = Array.isArray(field.options) ? field.options : (field.options ? String(field.options).split(',') : []);
                    const sel = document.createElement('select');
                    sel.className = 'form-select sc-cf'; sel.dataset.name = fName; sel.name = `plugin_servicecatalog_custom_fields[${fName}]`;
                    sel.innerHTML = '<option value="">— Select —</option>';
                    const mv = String(rawVal).trim().toLowerCase(); let found = false;
                    if (mv !== '') {
                        opts.forEach(o => { const opt = new Option(o, o); if (String(o).trim().toLowerCase() === mv) { opt.selected = true; found = true; } sel.add(opt); });
                        if (!found) { const opt = new Option(rawVal, rawVal); opt.selected = true; sel.add(opt); }
                    } else opts.forEach(o => sel.add(new Option(o, o)));
                    wrap.appendChild(sel);
                    const { condContainer, renderSubFields } = renderConditionalFields(wrap, field, rawVal, initialData, onChange);
                    sel.addEventListener('change', () => renderSubFields(sel.value));
                    renderSubFields(sel.value || rawVal);
                } else if (field.type === 'textarea') {
                    const ta = document.createElement('textarea');
                    ta.className = 'form-control sc-cf'; ta.dataset.name = fName; ta.name = `plugin_servicecatalog_custom_fields[${fName}]`; ta.rows = 2; ta.value = rawVal || '';
                    wrap.appendChild(ta);
                } else {
                    const inp = document.createElement('input');
                    inp.type = 'text'; inp.className = 'form-control sc-cf'; inp.dataset.name = fName; inp.name = `plugin_servicecatalog_custom_fields[${fName}]`; inp.value = rawVal || '';
                    wrap.appendChild(inp);
                }
                container.appendChild(wrap);
            });
            container.querySelectorAll('.sc-cf').forEach(el => {
                el.addEventListener('change', onChange); el.addEventListener('input', onChange);
            });
        }

        function buildWideCustomFields(container, fields, initialData, onChange) {
            container.innerHTML = '';
            if (!Array.isArray(fields) || fields.length === 0) { container.style.display = 'none'; return; }
            container.style.display = '';
            const row = document.createElement('div'); row.className = 'row g-3';
            const header = document.createElement('div'); header.className = 'col-12'; header.innerHTML = '<h6 class="mb-0 text-primary fw-bold">Additional Information</h6>';
            row.appendChild(header);
            fields.forEach((field, index) => {
                const fName = field.name || ('field_' + index);
                const col = document.createElement('div');
                const isTextarea = field.type === 'textarea';
                col.className = isTextarea ? 'col-12' : 'col-md-3';
                const lbl = document.createElement('label'); lbl.className = 'form-label small fw-bold mb-1'; lbl.textContent = field.label;
                col.appendChild(lbl);
                const rawVal = getFieldValue(initialData, fName, field.label, index);
                if (field.type === 'readonly') {
                    const ro = document.createElement('div'); ro.className = 'alert alert-info py-1 px-2 mb-0 small'; ro.textContent = field.value || '';
                    col.appendChild(ro);
                } else if (field.type === 'glpi_dropdown') {
                    const sel = document.createElement('select');
                    sel.className = 'form-select form-select-sm sc-cf'; sel.dataset.name = fName; sel.name = `plugin_servicecatalog_custom_fields[${fName}]`;
                    col.appendChild(sel); populateGlpiDropdown(sel, field.itemtype, rawVal);
                } else if (field.type === 'advanced_select') {
                    const opts = Array.isArray(field.options) ? field.options : (field.options ? String(field.options).split(',') : []);
                    const sel = document.createElement('select');
                    sel.className = 'form-select form-select-sm sc-cf'; sel.dataset.name = fName; sel.name = `plugin_servicecatalog_custom_fields[${fName}]`;
                    sel.innerHTML = '<option value="">— Select —</option>';
                    const mv = String(rawVal).trim().toLowerCase(); let found = false;
                    if (mv !== '') {
                        opts.forEach(o => { const opt = new Option(o, o); if (String(o).trim().toLowerCase() === mv) { opt.selected = true; found = true; } sel.add(opt); });
                        if (!found) { const opt = new Option(rawVal, rawVal); opt.selected = true; sel.add(opt); }
                    } else opts.forEach(o => sel.add(new Option(o, o)));
                    col.appendChild(sel);
                    const { condContainer, renderSubFields } = renderConditionalFields(col, field, rawVal, initialData, onChange);
                    sel.addEventListener('change', () => renderSubFields(sel.value));
                    renderSubFields(sel.value || rawVal);
                } else if (isTextarea) {
                    const ta = document.createElement('textarea');
                    ta.className = 'form-control form-control-sm sc-cf'; ta.dataset.name = fName; ta.name = `plugin_servicecatalog_custom_fields[${fName}]`; ta.rows = 2; ta.value = rawVal || '';
                    col.appendChild(ta);
                } else {
                    const inp = document.createElement('input');
                    inp.type = 'text'; inp.className = 'form-control form-control-sm sc-cf'; inp.dataset.name = fName; inp.name = `plugin_servicecatalog_custom_fields[${fName}]`; inp.value = rawVal || '';
                    col.appendChild(inp);
                }
                row.appendChild(col);
            });
            container.appendChild(row);
            container.querySelectorAll('.sc-cf').forEach(el => {
                el.addEventListener('change', onChange); el.addEventListener('input', onChange);
            });
        }

        function hideNativeCreationFields() {
            const textsToHide = ['opening date','type','category','status','request source','urgency','impact','priority','total duration','external id','actors','requester','observer','assigned to','items','my devices','general','service levels','tto','ttr','linked assistance objects','or complete search'];
            document.querySelectorAll('.card-header, .accordion-button, legend, h3, h4, label, .form-label').forEach(el => {
                const text = el.textContent.trim().toLowerCase();
                if (textsToHide.some(t => text === t || text.startsWith(t + ' ') || text.startsWith(t + ':'))) {
                    let container = el.closest('.card, .accordion-item');
                    if (!container) container = el.closest('.mb-3, .form-field, .row');
                    if (container && container.id !== 'sc-ticket-panel' && !container.querySelector('#sc-ticket-panel')) container.style.display = 'none';
                }
            });
            ['select[name="type"]','select[name="itilcategories_id"]','select[name="status"]','select[name="requesttypes_id"]','select[name="urgency"]','select[name="impact"]','select[name="priority"]','input[name="date"]','input[name="externalid"]'].forEach(sel => {
                const el = document.querySelector(sel);
                if (el) { const wrap = el.closest('.mb-3, .form-field, .row'); if (wrap) wrap.style.display = 'none'; }
            });
        }

        function injectWideLayout() {
            if (document.getElementById('sc-ticket-panel')) return true;
            const titleInput = document.querySelector('input[name="name"][type="text"]') || document.querySelector('textarea[name="name"]') || document.querySelector('#name');
            if (!titleInput) return false;
            const locInput = document.querySelector('select[name="locations_id"]') || document.querySelector('select[aria-label*="Location" i]');
            const nativeCard = titleInput.closest('.card') || titleInput.closest('.card-body')?.closest('.card') || titleInput.closest('.tab-pane') || titleInput.closest('form');
            if (!nativeCard || !nativeCard.parentElement) return false;
            const card = document.createElement('div');
            card.id = 'sc-ticket-panel';
            card.className = 'card border-primary mb-3';
            card.innerHTML = `
                <div class="card-header py-2" style="background:#3a5693;color:#fff;font-weight:600;"><i class="ti ti-headset"></i> Service Catalog</div>
                <div class="card-body py-3"><div class="row g-3">
                    <div class="col-md-4"><label class="form-label fw-bold mb-1">Ticket Type</label><select class="form-select" id="sc_ticket_type"><option value="1">Incident</option><option value="2">Request</option></select></div>
                    <div class="col-md-4"><label class="form-label fw-bold mb-1">Servicing Team</label><select class="form-select" id="sc_team" disabled><option value="">— Select Team —</option></select></div>
                    <div class="col-md-4"><label class="form-label fw-bold mb-1">Service Category</label><select class="form-select" id="sc_category" disabled><option value="">— Select Category —</option></select></div>
                    <div class="col-md-4"><label class="form-label fw-bold mb-1">Service Type</label><select class="form-select" id="sc_type" disabled><option value="">— Select Type —</option></select></div>
                    <div class="col-md-4"><label class="form-label fw-bold mb-1">Service Item</label><select class="form-select" id="sc_item" disabled><option value="">— Select Item —</option></select></div>
                    <div class="col-md-4" id="sc-slot-location"></div>
                    <div class="col-12" id="sc_custom_fields" style="display:none;"></div>
                    <div class="col-12" id="sc-slot-title"></div>
                </div></div>
            `;
            nativeCard.parentElement.insertBefore(card, nativeCard);
            const moveField = (input, slot) => {
                if (!input || !slot) return;
                let wrap = input.closest('.mb-3') || input.closest('.form-field') || input.closest('[class*="col-"]') || input.parentElement;
                if (wrap) slot.appendChild(wrap);
            };
            moveField(titleInput, card.querySelector('#sc-slot-title'));
            moveField(locInput, card.querySelector('#sc-slot-location'));
            hideNativeCreationFields();
            const pluginType = card.querySelector('#sc_ticket_type');
            const team = card.querySelector('#sc_team'); const cat = card.querySelector('#sc_category');
            const typ = card.querySelector('#sc_type'); const itm = card.querySelector('#sc_item');
            const cfBox = card.querySelector('#sc_custom_fields');
            const state = { team: '', cat: '', type: '', item: '', custom: {} };
            const setNativeType = (val) => {
                const nativeTypeEl = document.querySelector('select[name="type"]');
                if (!nativeTypeEl) return;
                try {
                    if (nativeTypeEl.tomselect && typeof nativeTypeEl.tomselect.setValue === 'function') nativeTypeEl.tomselect.setValue(val, true);
                    else if (window.jQuery && jQuery(nativeTypeEl).hasClass('select2-hidden-accessible')) jQuery(nativeTypeEl).val(val).trigger('change.select2');
                    else nativeTypeEl.value = val;
                } catch(e) {}
            };
            async function loadTeams(tt) {
                [team,cat,typ,itm].forEach(s => { s.innerHTML = '<option value="">— Select —</option>'; s.disabled = true; });
                cfBox.style.display = 'none';
                const rows = await (await fetch(AJAX + '/getTeams.php?ticket_type=' + tt, { credentials: 'same-origin' })).json();
                team.innerHTML = '<option value="">— Select Team —</option>';
                rows.forEach(r => team.add(new Option(r.name, r.id)));
                team.disabled = rows.length === 0;
            }
            async function loadCats(tid) {
                [cat,typ,itm].forEach(s => { s.innerHTML = '<option value="">— Select —</option>'; s.disabled = true; });
                cfBox.style.display = 'none';
                const rows = await (await fetch(AJAX + '/getCategories.php?teams_id=' + tid + '&form_type=1', { credentials: 'same-origin' })).json();
                cat.innerHTML = '<option value="">— Select Category —</option>';
                rows.forEach(r => cat.add(new Option(r.name, r.id)));
                cat.disabled = rows.length === 0;
            }
            async function loadTypes(cid) {
                [typ,itm].forEach(s => { s.innerHTML = '<option value="">— Select —</option>'; s.disabled = true; });
                cfBox.style.display = 'none';
                const rows = await (await fetch(AJAX + '/getTypes.php?categories_id=' + cid + '&form_type=1', { credentials: 'same-origin' })).json();
                typ.innerHTML = '<option value="">— Select Type —</option>';
                rows.forEach(r => typ.add(new Option(r.name, r.id)));
                typ.disabled = rows.length === 0;
            }
            async function loadItems(tid) {
                itm.innerHTML = '<option value="">— Select Item —</option>'; itm.disabled = true;
                cfBox.style.display = 'none';
                const rows = await (await fetch(AJAX + '/getItems.php?types_id=' + tid + '&form_type=1', { credentials: 'same-origin' })).json();
                rows.forEach(r => {
                    const o = new Option(r.name, r.id);
                    if (r.custom_fields) o.setAttribute('data-custom', typeof r.custom_fields === 'string' ? r.custom_fields : JSON.stringify(r.custom_fields));
                    itm.add(o);
                });
                itm.disabled = rows.length === 0;
            }
            pluginType.addEventListener('change', () => { setNativeType(pluginType.value); state.team = state.cat = state.type = state.item = ''; state.custom = {}; loadTeams(pluginType.value); });
            team.addEventListener('change', () => { state.team = team.value; state.cat = state.type = state.item = ''; state.custom = {}; loadCats(team.value); });
            cat.addEventListener('change', () => { state.cat = cat.value; state.type = state.item = ''; state.custom = {}; loadTypes(cat.value); });
            typ.addEventListener('change', () => { state.type = typ.value; state.item = ''; state.custom = {}; loadItems(typ.value); });
            itm.addEventListener('change', () => {
                state.item = itm.value;
                if (!state.item) { cfBox.style.display = 'none'; return; }
                let fields = [];
                try { fields = JSON.parse(itm.options[itm.selectedIndex].getAttribute('data-custom') || '[]'); } catch(e){}
                buildWideCustomFields(cfBox, fields, state.custom, (e) => {
                    if (e && e.target && e.target.dataset.name) state.custom[e.target.dataset.name] = e.target.value;
                });
            });
            const nativeForm = titleInput.closest('form');
            let isSubmitting = false;
            if (nativeForm) {
                let hiddenSc = document.getElementById('sc_selection_data');
                if (!hiddenSc) {
                    hiddenSc = document.createElement('input'); hiddenSc.type = 'hidden'; hiddenSc.name = 'sc_selection_data'; hiddenSc.id = 'sc_selection_data';
                    nativeForm.appendChild(hiddenSc);
                }
                const handleSubmit = (e) => {
                    if (isSubmitting) return;
                    e.preventDefault();
                    // FIX: refresh ALL state from DOM
                    state.team = team.value || ''; state.cat = cat.value || ''; state.type = typ.value || ''; state.item = itm.value || '';
                    state.custom = {};
                    cfBox.querySelectorAll('.sc-cf').forEach(el => { if (el.dataset.name) state.custom[el.dataset.name] = el.value; });
                    const dataToSave = { ticket_type: pluginType.value, team: state.team, cat: state.cat, type: state.type, item: state.item, custom: state.custom };
                    hiddenSc.value = JSON.stringify(dataToSave);
                    saveSelectionCookie(dataToSave);
                    isSubmitting = true;
                    nativeForm.removeEventListener('submit', handleSubmit);
                    let addInput = document.querySelector('input[name="add"][type="hidden"]');
                    if (!addInput) { addInput = document.createElement('input'); addInput.type = 'hidden'; addInput.name = 'add'; addInput.value = '1'; nativeForm.appendChild(addInput); }
                    nativeForm.submit();
                };
                nativeForm.addEventListener('submit', handleSubmit);
            }
            loadTeams(pluginType.value);
            return true;
        }

        // ============================
        // SIDEBAR — SAVE BUG FIXED
        // ============================
        function injectSidebarLayout() {
            if (document.getElementById('sc-ticket-panel')) return true;
            const nativeCat = document.querySelector('select[name="itilcategories_id"]') || document.querySelector('select[aria-label*="Category" i]');
            if (!nativeCat) return false;
            const wrapper = nativeCat.closest('.mb-3') || nativeCat.closest('.form-field') || nativeCat.parentElement;
            if (!wrapper || !wrapper.parentElement) return false;
            const card = document.createElement('div');
            card.innerHTML = `
                <div class="card mt-3" id="sc-ticket-panel" style="border:1px solid #dee2e6;border-radius:6px;">
                    <div class="card-header py-2" style="background:#fff;border-bottom:1px solid #dee2e6;display:flex;justify-content:space-between;align-items:center;">
                        <h3 class="card-title m-0" style="font-size:1rem;font-weight:600;color:#444;"><i class="ti ti-headset"></i> Service Catalog Info</h3>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="sc_auto_btn" title="Auto-detect from native category"><i class="ti ti-refresh"></i> Refresh</button>
                    </div>
                    <div class="card-body py-3">
                        <div class="mb-3"><label class="form-label mb-1" style="font-weight:500;">Servicing Team</label><select class="form-select" id="sc_team" disabled><option value="">— Select —</option></select></div>
                        <div class="mb-3"><label class="form-label mb-1" style="font-weight:500;">Category</label><select class="form-select" id="sc_category" disabled><option value="">— Select —</option></select></div>
                        <div class="mb-3"><label class="form-label mb-1" style="font-weight:500;">Type</label><select class="form-select" id="sc_type" disabled><option value="">— Select —</option></select></div>
                        <div class="mb-3"><label class="form-label mb-1" style="font-weight:500;">Item</label><select class="form-select" id="sc_item" disabled><option value="">— Select —</option></select></div>
                        <div id="sc_custom_fields" style="display:none;"></div>
                    </div>
                </div>
            `;
            const panel = card.firstElementChild;
            wrapper.parentElement.insertBefore(panel, wrapper.nextSibling);
            const team = panel.querySelector('#sc_team'); const cat = panel.querySelector('#sc_category');
            const typ = panel.querySelector('#sc_type'); const itm = panel.querySelector('#sc_item');
            const cfBox = panel.querySelector('#sc_custom_fields');
            const autoBtn = panel.querySelector('#sc_auto_btn');
            const state = { team: '', cat: '', type: '', item: '', custom: {}, custom_fields: null };

            async function loadTeams(sel) {
                const t1 = await (await fetch(AJAX + '/getTeams.php?ticket_type=1', { credentials: 'same-origin' })).json();
                const t2 = await (await fetch(AJAX + '/getTeams.php?ticket_type=2', { credentials: 'same-origin' })).json();
                const rows = [...t1, ...t2];
                team.innerHTML = '<option value="">— Select —</option>';
                rows.forEach(r => team.add(new Option(r.name, r.id, false, String(r.id) === String(sel))));
                team.disabled = false;
            }
            async function loadCats(tid, sel) {
                cat.innerHTML = '<option value="">— Select —</option>'; cat.disabled = true;
                typ.innerHTML = '<option value="">— Select —</option>'; typ.disabled = true;
                itm.innerHTML = '<option value="">— Select —</option>'; itm.disabled = true;
                cfBox.style.display = 'none';
                if (!tid) return;
                const rows = await (await fetch(AJAX + '/getCategories.php?teams_id=' + tid + '&form_type=1', { credentials: 'same-origin' })).json();
                rows.forEach(r => cat.add(new Option(r.name, r.id, false, String(r.id) === String(sel))));
                cat.disabled = rows.length === 0;
            }
            async function loadTypes(cid, sel) {
                typ.innerHTML = '<option value="">— Select —</option>'; typ.disabled = true;
                itm.innerHTML = '<option value="">— Select —</option>'; itm.disabled = true;
                cfBox.style.display = 'none';
                if (!cid) return;
                const rows = await (await fetch(AJAX + '/getTypes.php?categories_id=' + cid + '&form_type=1', { credentials: 'same-origin' })).json();
                rows.forEach(r => typ.add(new Option(r.name, r.id, false, String(r.id) === String(sel))));
                typ.disabled = rows.length === 0;
            }
            async function loadItems(tid, sel) {
                itm.innerHTML = '<option value="">— Select —</option>'; itm.disabled = true;
                cfBox.style.display = 'none';
                if (!tid) return;
                const rows = await (await fetch(AJAX + '/getItems.php?types_id=' + tid + '&form_type=1', { credentials: 'same-origin' })).json();
                rows.forEach(r => {
                    const o = new Option(r.name, r.id, false, String(r.id) === String(sel));
                    if (r.custom_fields) o.setAttribute('data-custom', typeof r.custom_fields === 'string' ? r.custom_fields : JSON.stringify(r.custom_fields));
                    itm.add(o);
                });
                itm.disabled = rows.length === 0;
            }
            async function handleItem(skip) {
                state.item = itm.value;
                if (!skip) state.custom = {};
                if (!state.item) { cfBox.style.display = 'none'; return; }
                let fields = [];
                try {
                    const raw = itm.options[itm.selectedIndex].getAttribute('data-custom');
                    if (raw && raw !== '[]' && raw !== 'null') fields = JSON.parse(raw);
                } catch(e){}
                if (fields.length === 0 && state.custom_fields) {
                    try { fields = typeof state.custom_fields === 'string' ? JSON.parse(state.custom_fields) : state.custom_fields; } catch(e){}
                }
                if (fields.length === 0) {
                    try {
                        const r = await fetch(AJAX + '/getItems.php?types_id=' + state.type + '&form_type=1', { credentials: 'same-origin' });
                        const rows = await r.json();
                        const item = rows.find(x => String(x.id) === String(state.item));
                        if (item && item.custom_fields) fields = typeof item.custom_fields === 'string' ? JSON.parse(item.custom_fields) : item.custom_fields;
                    } catch(e) {}
                }
                buildSidebarCustomFields(cfBox, fields, state.custom, (e) => {
                    if (e && e.target && e.target.dataset.name) state.custom[e.target.dataset.name] = e.target.value;
                });
            }
            async function autoDetectFromNative() {
                const nativeCatEl = document.querySelector('select[name="itilcategories_id"]');
                if (!nativeCatEl) return;
                const nativeCatName = nativeCatEl.options[nativeCatEl.selectedIndex].textContent.trim();
                const nativeCatId = nativeCatEl.value;
                if (!nativeCatId || nativeCatId === '0') return;
                await loadTeams('');
                let matchCat = null, matchTeam = null;
                for (let i = 0; i < team.options.length; i++) {
                    const tid = team.options[i].value;
                    if (!tid) continue;
                    const cats = await (await fetch(AJAX + '/getCategories.php?teams_id=' + tid + '&form_type=1', { credentials: 'same-origin' })).json();
                    const found = cats.find(c => c.name.trim().toLowerCase() === nativeCatName.toLowerCase());
                    if (found) { matchCat = found; matchTeam = tid; break; }
                }
                if (matchCat) {
                    team.value = matchTeam;
                    await loadCats(matchTeam, matchCat.id);
                    await loadTypes(matchCat.id, null);
                    if (typ.options.length > 1) {
                        typ.selectedIndex = 1;
                        await loadItems(typ.value, null);
                        if (itm.options.length > 1) { itm.selectedIndex = 1; handleItem(false); }
                    }
                }
            }

            // FIX: clear state.custom when hierarchy changes
            team.addEventListener('change', () => { state.team = team.value; state.cat = state.type = state.item = ''; state.custom = {}; loadCats(team.value); });
            cat.addEventListener('change', () => { state.cat = cat.value; state.type = state.item = ''; state.custom = {}; loadTypes(cat.value); });
            typ.addEventListener('change', () => { state.type = typ.value; state.item = ''; state.custom = {}; loadItems(typ.value); });
            itm.addEventListener('change', () => handleItem(false));
            autoBtn.addEventListener('click', autoDetectFromNative);

            // ========== SAVE FIX ==========
            const nativeUpdateBtn = document.querySelector('button[name="update"], input[name="update"], button[name="save"], input[name="save"], button[type="submit"][name="update"]');
            const titleInput = document.querySelector('input[name="name"][type="text"]');
            const nativeForm = titleInput ? titleInput.closest('form') : document.querySelector('form');

            if (nativeUpdateBtn && nativeForm) {
                let isSaving = false;
                let bypass = false;

                nativeUpdateBtn.addEventListener('click', async (e) => {
                    if (bypass) { bypass = false; return; }
                    e.preventDefault();
                    e.stopPropagation();
                    if (isSaving) return;
                    isSaving = true;

                    // FIX 1: Refresh state from DOM (catches any missed onChange)
                    state.team = team.value || '';
                    state.cat = cat.value || '';
                    state.type = typ.value || '';
                    state.item = itm.value || '';
                    state.custom = {};
                    cfBox.querySelectorAll('.sc-cf').forEach(el => {
                        if (el.dataset.name) state.custom[el.dataset.name] = el.value;
                    });

                    // FIX 2: Set sc_selection_data hidden field (plugin's native save reads this)
                    const payload = {
                        ticket_type: document.querySelector('select[name="type"]')?.value || '1',
                        team: state.team, cat: state.cat, type: state.type, item: state.item, custom: state.custom
                    };
                    let hiddenSc = document.getElementById('sc_selection_data');
                    if (!hiddenSc) {
                        hiddenSc = document.createElement('input');
                        hiddenSc.type = 'hidden';
                        hiddenSc.name = 'sc_selection_data';
                        hiddenSc.id = 'sc_selection_data';
                        nativeForm.appendChild(hiddenSc);
                    }
                    hiddenSc.value = JSON.stringify(payload);
                    saveSelectionCookie(payload);

                    // FIX 3: AJAX save (belt + suspenders)
                    const fd = new FormData();
                    fd.append('ticket_id', ticketId);
                    fd.append('team_id', state.team);
                    fd.append('cat_id', state.cat);
                    fd.append('type_id', state.type);
                    fd.append('item_id', state.item);
                    fd.append('custom_data', JSON.stringify(state.custom));
                    const csrf = document.querySelector('input[name="_glpi_csrf_token"]')?.value;
                    if (csrf) fd.append('_glpi_csrf_token', csrf);

                    try {
                        const response = await fetch(AJAX + '/updateCustomDataDirect.php', { method: 'POST', body: fd, credentials: 'same-origin' });
                        const text = await response.text();
                        let res;
                        try { res = JSON.parse(text); } catch(err) {
                            console.error('[ServiceCatalog] Save returned non-JSON:', text.substring(0, 300));
                            throw new Error('Server returned non-JSON');
                        }
                        console.log('[ServiceCatalog] AJAX save response:', res);
                        if (!res.success) console.warn('[ServiceCatalog] AJAX save reported failure:', res);
                        else console.log('[ServiceCatalog] ✓ AJAX save succeeded');
                    } catch (err) {
                        console.error('[ServiceCatalog] AJAX save failed:', err);
                    }

                    // FIX 4: Verify DB now matches what we sent
                    try {
                        const vR = await fetch(AJAX + '/getCustomDataDirect.php?tickets_id=' + ticketId, { credentials: 'same-origin' });
                        const vData = await vR.json();
                        const db = vData.current || {};
                        console.log('[ServiceCatalog] DB verify:', db);
                        const mismatch = 
                            String(db.teams_id || 0) !== String(state.team || 0) ||
                            String(db.categories_id || 0) !== String(state.cat || 0) ||
                            String(db.types_id || 0) !== String(state.type || 0) ||
                            String(db.items_id || 0) !== String(state.item || 0);
                        if (mismatch) {
                            console.warn('[ServiceCatalog] ⚠ DB does not match form. Expected:',
                                { team: state.team, cat: state.cat, type: state.type, item: state.item },
                                'Got:', { team: db.teams_id, cat: db.categories_id, type: db.types_id, item: db.items_id });
                            console.warn('[ServiceCatalog] Native form will submit next — sc_selection_data was set to:', payload);
                        } else {
                            console.log('[ServiceCatalog] ✓ Verified: DB matches form values');
                        }
                    } catch (vErr) { console.warn('[ServiceCatalog] Verify failed:', vErr); }

                    isSaving = false;
                    bypass = true;
                    nativeUpdateBtn.click();
                }, true);
            } else {
                console.warn('[ServiceCatalog] Update button or form not found — native save will run without our custom-field injection');
            }

            // Load current data from DB
            fetch(AJAX + '/getCustomDataDirect.php?tickets_id=' + ticketId, { credentials: 'same-origin' })
                .then(r => r.json())
                .then(async data => {
                    console.log('[ServiceCatalog] Loaded current data:', data);
                    const cur = data.current;
                    if (!cur || !cur.items_id) { autoDetectFromNative(); return; }
                    const t = cur.teams_id || 0, c = cur.categories_id || 0, ty = cur.types_id || 0, i = cur.items_id || 0;
                    if (isId(t) || isId(c)) {
                        const dbCustom = parseCustomData(cur.custom_data);
                        state.custom = dbCustom;
                        try {
                            const r = await fetch(AJAX + '/getItems.php?types_id=' + ty + '&form_type=1', { credentials: 'same-origin' });
                            const rows = await r.json();
                            const item = rows.find(x => String(x.id) === String(i));
                            if (item && item.custom_fields) state.custom_fields = item.custom_fields;
                        } catch(e) {}
                        state.team = t; state.cat = c; state.type = ty; state.item = i;
                        await loadTeams(t);
                        if (isId(t)) await loadCats(t, c);
                        if (isId(c)) await loadTypes(c, ty);
                        if (isId(ty)) await loadItems(ty, i);
                        if (isId(i)) setTimeout(() => handleItem(true), 150);
                    } else autoDetectFromNative();
                })
                .catch((err) => { console.error('SC fetch error', err); autoDetectFromNative(); });

            return true;
        }

        function applyRefToPage(id, ref) {
            if (!ref || ref === id) return;
            if (document.title.includes(ref)) return;
            const safe = new RegExp('(?<![A-Za-z-])' + id + '(?![A-Za-z])', 'g');
            document.title = document.title.replace(safe, ref);
            document.querySelectorAll('.page-title, h1, h2, h3, .card-title, .breadcrumb-item').forEach(el => {
                if (el.dataset.scRef) return;
                if (!/\b\d+\b/.test(el.textContent)) return;
                el.innerHTML = el.innerHTML.replace(safe, ref);
                el.dataset.scRef = '1';
            });
        }

        const poll = setInterval(() => {
            if (isNew) { if (injectWideLayout()) clearInterval(poll); }
            else { if (injectSidebarLayout()) clearInterval(poll); }
        }, 500);
        setTimeout(() => clearInterval(poll), 15000);

        if (!isNew) {
            const nativeTypeEl = document.querySelector('select[name="type"]');
            const tv = nativeTypeEl && nativeTypeEl.value ? String(nativeTypeEl.value) : '1';
            const fallback = (tv === '2' ? 'REQ' : 'INC') + '-' + ticketId;
            fetch(AJAX + '/getTicketRefs.php?ids[]=' + ticketId, { credentials: 'same-origin' })
                .then(r => r.json())
                .then(d => applyRefToPage(ticketId, (d && d[ticketId]) || fallback))
                .catch(() => applyRefToPage(ticketId, fallback));
        }
    }

    // ============================================================
    // SECTION 4 — translateList (unchanged)
    // ============================================================
    if (path.includes('/front/ticket.php') || path.includes('/front/plugin_servicecatalog.php')) {
        const fetchAll = async (url) => {
            try { const r = await fetch(AJAX + '/' + url, { credentials: 'same-origin' }); if (!r.ok) return []; const a = await r.json(); return Array.isArray(a) ? a : []; }
            catch { return []; }
        };
        const _maps = { ts: 0, team: new Map(), cat: new Map(), type: new Map(), item: new Map() };
        async function rebuildMaps() {
            if (Date.now() - _maps.ts < 60000 && _maps.team.size) return;
            _maps.team.clear(); _maps.cat.clear(); _maps.type.clear(); _maps.item.clear();
            const tI = await fetchAll('getTeams.php?ticket_type=1');
            const tR = await fetchAll('getTeams.php?ticket_type=2');
            const teams = [...tI, ...tR];
            teams.forEach(t => _maps.team.set(String(t.id), t.name));
            const cats = [];
            for (const t of teams) {
                cats.push(...await fetchAll('getCategories.php?teams_id=' + t.id + '&form_type=1'));
                cats.push(...await fetchAll('getCategories.php?teams_id=' + t.id + '&form_type=2'));
            }
            cats.forEach(c => _maps.cat.set(String(c.id), c.name));
            const types = [];
            for (const c of cats) {
                types.push(...await fetchAll('getTypes.php?categories_id=' + c.id + '&form_type=1'));
                types.push(...await fetchAll('getTypes.php?categories_id=' + c.id + '&form_type=2'));
            }
            types.forEach(t => _maps.type.set(String(t.id), t.name));
            const items = [];
            for (const t of types) {
                items.push(...await fetchAll('getItems.php?types_id=' + t.id + '&form_type=1'));
                items.push(...await fetchAll('getItems.php?types_id=' + t.id + '&form_type=2'));
            }
            items.forEach(i => _maps.item.set(String(i.id), i.name));
            _maps.ts = Date.now();
        }
        let translating = false;
        async function translateList() {
            if (translating) return; translating = true;
            try {
                const headers = Array.from(document.querySelectorAll('thead th'));
                if (!headers.length) return;
                const idx = re => headers.findIndex(h => re.test(h.textContent.trim()));
                const iId = idx(/^ID$/i);
                const iTeam = idx(/Servicing Team|Service Team/i);
                const iCat = idx(/Service Category/i);
                const iType = idx(/Service Type/i);
                const iItem = idx(/Service Item/i);
                const iTk = idx(/^Type$/i);
                if (iId < 0 && iTeam < 0 && iCat < 0 && iType < 0 && iItem < 0) return;
                await rebuildMaps();
                const ids = [];
                if (iId >= 0) {
                    document.querySelectorAll('tbody tr').forEach(tr => {
                        const c = tr.querySelectorAll('td');
                        if (c[iId]) { const t = c[iId].textContent.trim(); if (/^\d+$/.test(t) && !c[iId].dataset.scReplaced) ids.push(t); }
                    });
                }
                let refs = {};
                if (ids.length) {
                    try { const r = await fetch(AJAX + '/getTicketRefs.php?' + ids.map(id => 'ids[]=' + id).join('&'), { credentials: 'same-origin' }); refs = await r.json(); } catch {}
                }
                document.querySelectorAll('tbody tr').forEach(tr => {
                    const cells = tr.querySelectorAll('td');
                    if (iId >= 0 && cells[iId] && !cells[iId].dataset.scReplaced) {
                        const td = cells[iId];
                        const txt = td.textContent.trim();
                        if (/^\d+$/.test(txt)) {
                            let ref = refs[txt];
                            if (!ref) {
                                let prefix = 'INC-';
                                if (iTk >= 0 && cells[iTk]) {
                                    const tk = cells[iTk].textContent.trim().toLowerCase();
                                    if (tk.includes('request') || tk.includes('demande')) prefix = 'REQ-';
                                }
                                ref = prefix + txt;
                            }
                            td.textContent = ref;
                            td.dataset.scReplaced = '1';
                        }
                    }
                    [[iTeam, _maps.team], [iCat, _maps.cat], [iType, _maps.type], [iItem, _maps.item]].forEach(([i, map]) => {
                        if (i < 0 || !cells[i] || cells[i].dataset.scTranslated) return;
                        const td = cells[i];
                        const t = td.textContent.trim();
                        if (/^\d+$/.test(t) && map.has(t)) { td.textContent = map.get(t); td.dataset.scTranslated = '1'; }
                    });
                });
            } finally { translating = false; }
        }
        setTimeout(translateList, 500);
        setInterval(translateList, 1500);
    }
})();
