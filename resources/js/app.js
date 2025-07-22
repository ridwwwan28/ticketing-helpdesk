import "./bootstrap";

//Buat jQuery global (jika pakai plugin jQuery lain)
import $ from "jquery";
window.$ = $;
window.jQuery = $;

// DataTables Core & Buttons
import "datatables.net-dt";
import "datatables.net-buttons";
import "datatables.net-buttons/js/buttons.html5"; //penting
import "datatables.net-buttons/js/buttons.print"; //untuk print

// CSS untuk tombol export
import "datatables.net-dt/css/dataTables.dataTables.css";
import "datatables.net-buttons-dt/css/buttons.dataTables.css";

import JSZip from "jszip";
window.JSZip = JSZip; // penting agar tombol Excel bekerja

import * as pdfMake from "pdfmake/build/pdfmake";
import * as pdfFonts from "pdfmake/build/vfs_fonts";

pdfMake.vfs = pdfFonts.vfs; //supaya PDF bisa dibuat
window.pdfMake = pdfMake; // bisa dibutuhkan di beberapa plugin

import "dropzone";
import "preline";

document.addEventListener("DOMContentLoaded", () => {
    $("#ticket-table").DataTable({
        dom:
            "<'hidden md:flex md:flex-col lg:flex-row md:items-center md:justify-between md:gap-4 md:mx-2 md:mt-3 md:mb-4'Bf>" +
            "<'overflow-x-auto't>" +
            "<'hidden md:flex md:flex-col lg:flex-row md:items-center md:justify-between md:gap-4 md:mx-2 md:my-8'<'infoWrapper'i><'paginationWrapper'p>>",

        buttons: [
            {
                extend: "collection",
                text: '<span class="inline-flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>Export</span>',
                className:
                    "bg-gray-700 text-white text-xs font-medium px-3 py-1 rounded hover:bg-gray-800",

                buttons: [
                    {
                        extend: "excel",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download-icon lucide-download"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg> EXCEL',
                    },
                    {
                        extend: "pdf",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download-icon lucide-download"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg> PDF',
                    },
                    {
                        extend: "print",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"/><rect x="6" y="14" width="12" height="8" rx="1"/></svg> PRINT',
                    },
                ],
            },
        ],

        language: {
            paginate: {
                next: '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>',
                previous:
                    '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>',
            },
            search: "Cari : ",
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
            zeroRecords: "Tidak ada data yang cocok",
        },
    });

    $("#user-table").DataTable({
        dom:
            "<'flex flex-col md:flex-row items-center justify-between gap-4 mx-2 mt-3 mb-4'Bf>" +
            "<'overflow-x-auto't>" +
            "<'flex flex-col md:flex-row items-center justify-between gap-4 mx-2 my-8'<'infoWrapper'i><'paginationWrapper'p>>",

        buttons: [
            {
                extend: "collection",
                text: '<span class="inline-flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>Export</span>',
                className:
                    "bg-gray-700 text-white text-xs font-medium px-3 py-1 rounded hover:bg-gray-800",

                buttons: [
                    {
                        extend: "excel",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download-icon lucide-download"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg> EXCEL',
                    },
                    {
                        extend: "pdf",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download-icon lucide-download"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg> PDF',
                    },
                    {
                        extend: "print",
                        text: '<svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"/><rect x="6" y="14" width="12" height="8" rx="1"/></svg> PRINT',
                    },
                ],
            },
        ],

        language: {
            paginate: {
                next: '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>',
                previous:
                    '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>',
            },
            search: "Cari : ",
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
            zeroRecords: "Tidak ada data yang cocok",
        },
    });
});
