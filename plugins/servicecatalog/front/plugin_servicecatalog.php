
<!-- EXPORT FEATURE START -->
<script>
(function() {
    'use strict';
    
    // Only run if we are on the items page
    if (!window.location.search.includes('page=items')) return;

    // 1. Inject the Export Buttons and Libraries into the DOM
    const wrapper = document.createElement('div');
    wrapper.innerHTML = `
        <div class="mb-3 text-end" id="export-btn-container">
            <button id="exportExcelBtn" class="btn btn-success btn-sm">
                <i class="ti ti-file-spreadsheet"></i> Export to Excel
            </button>
            <button id="exportPdfBtn" class="btn btn-danger btn-sm">
                <i class="ti ti-file-type-pdf"></i> Export to PDF
            </button>
        </div>
        <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"><\/script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"><\/script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"><\/script>
    `;
    
    // Find a good place to insert the buttons (before the table)
    const table = document.querySelector('table.table');
    if (table) {
        table.parentNode.insertBefore(wrapper, table);
    } else {
        document.body.prepend(wrapper);
    }

    // 2. Wait for libraries to load before enabling buttons
    setTimeout(() => {
        const btnExcel = document.getElementById('exportExcelBtn');
        const btnPdf = document.getElementById('exportPdfBtn');

        function getExportData() {
            const rows = [];
            const tableEl = document.querySelector('table.table'); 
            if (!tableEl) {
                alert('Data table not found for export.');
                return [];
            }

            const headers = Array.from(tableEl.querySelectorAll('thead th')).map(th => th.innerText.trim());
            rows.push(headers);

            const bodyRows = tableEl.querySelectorAll('tbody tr');
            bodyRows.forEach(tr => {
                const cells = Array.from(tr.querySelectorAll('td'));
                const rowData = cells.map(td => {
                    let text = td.innerText.trim();
                    // Remove leading spaces (indentation) for hierarchy
                    text = text.replace(/^[\s\u00A0]+/, '');
                    return text;
                });
                while (rowData.length < headers.length) rowData.push('');
                rows.push(rowData);
            });
            return rows;
        }

        btnExcel.addEventListener('click', function() {
            const data = getExportData();
            if (data.length === 0) return;

            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);
            XLSX.utils.book_append_sheet(wb, ws, 'Service Catalog Items');
            XLSX.writeFile(wb, 'ServiceCatalog_Items_Export.xlsx');
        });

        btnPdf.addEventListener('click', function() {
            const data = getExportData();
            if (data.length === 0) return;

            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('l', 'pt', 'a4');

            doc.autoTable({
                head: [data[0]],
                body: data.slice(1),
                startY: 20,
                styles: { fontSize: 8, cellPadding: 3 },
                headStyles: { fillColor: [58, 86, 147], textColor: 255 },
                columnStyles: {
                    0: { cellWidth: 'wrap' }, 1: { cellWidth: 'wrap' },
                    2: { cellWidth: 'wrap' }, 3: { cellWidth: 'wrap' },
                    4: { cellWidth: 'wrap' }, 5: { cellWidth: 'wrap' }
                },
                didDrawPage: function(data) {
                    doc.setFontSize(8);
                    doc.text('Page ' + doc.internal.getNumberOfPages(), doc.internal.pageSize.width - 40, doc.internal.pageSize.height - 10);
                }
            });

            doc.save('ServiceCatalog_Items_Export.pdf');
        });
    }, 1000); // 1 second delay to ensure CDN scripts are loaded
})();
</script>
<!-- EXPORT FEATURE END -->

<!-- EXPORT FEATURE START -->
<script>
(function() {
    'use strict';
    
    // Only run if we are on the items page
    if (!window.location.search.includes('page=items')) return;

    // 1. Inject the Export Buttons and Libraries into the DOM
    const wrapper = document.createElement('div');
    wrapper.innerHTML = `
        <div class="mb-3 text-end" id="export-btn-container">
            <button id="exportExcelBtn" class="btn btn-success btn-sm">
                <i class="ti ti-file-spreadsheet"></i> Export to Excel
            </button>
            <button id="exportPdfBtn" class="btn btn-danger btn-sm">
                <i class="ti ti-file-type-pdf"></i> Export to PDF
            </button>
        </div>
        <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"><\/script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"><\/script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"><\/script>
    `;
    
    // Find a good place to insert the buttons (before the table)
    const table = document.querySelector('table.table');
    if (table) {
        table.parentNode.insertBefore(wrapper, table);
    } else {
        document.body.prepend(wrapper);
    }

    // 2. Wait for libraries to load before enabling buttons
    setTimeout(() => {
        const btnExcel = document.getElementById('exportExcelBtn');
        const btnPdf = document.getElementById('exportPdfBtn');

        function getExportData() {
            const rows = [];
            const tableEl = document.querySelector('table.table'); 
            if (!tableEl) {
                alert('Data table not found for export.');
                return [];
            }

            const headers = Array.from(tableEl.querySelectorAll('thead th')).map(th => th.innerText.trim());
            rows.push(headers);

            const bodyRows = tableEl.querySelectorAll('tbody tr');
            bodyRows.forEach(tr => {
                const cells = Array.from(tr.querySelectorAll('td'));
                const rowData = cells.map(td => {
                    let text = td.innerText.trim();
                    // Remove leading spaces (indentation) for hierarchy
                    text = text.replace(/^[\s\u00A0]+/, '');
                    return text;
                });
                while (rowData.length < headers.length) rowData.push('');
                rows.push(rowData);
            });
            return rows;
        }

        btnExcel.addEventListener('click', function() {
            const data = getExportData();
            if (data.length === 0) return;

            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);
            XLSX.utils.book_append_sheet(wb, ws, 'Service Catalog Items');
            XLSX.writeFile(wb, 'ServiceCatalog_Items_Export.xlsx');
        });

        btnPdf.addEventListener('click', function() {
            const data = getExportData();
            if (data.length === 0) return;

            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('l', 'pt', 'a4');

            doc.autoTable({
                head: [data[0]],
                body: data.slice(1),
                startY: 20,
                styles: { fontSize: 8, cellPadding: 3 },
                headStyles: { fillColor: [58, 86, 147], textColor: 255 },
                columnStyles: {
                    0: { cellWidth: 'wrap' }, 1: { cellWidth: 'wrap' },
                    2: { cellWidth: 'wrap' }, 3: { cellWidth: 'wrap' },
                    4: { cellWidth: 'wrap' }, 5: { cellWidth: 'wrap' }
                },
                didDrawPage: function(data) {
                    doc.setFontSize(8);
                    doc.text('Page ' + doc.internal.getNumberOfPages(), doc.internal.pageSize.width - 40, doc.internal.pageSize.height - 10);
                }
            });

            doc.save('ServiceCatalog_Items_Export.pdf');
        });
    }, 1000); // 1 second delay to ensure CDN scripts are loaded
})();
</script>
<!-- EXPORT FEATURE END -->
