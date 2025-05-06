$(document).ready(function () {
    "use strict";
    $("#basic-datatable").DataTable({
        keys: !0,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>",
            },
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
    });
    // var a = $("#datatable-buttons").DataTable({
    //     lengthChange: !1,
    //     buttons: ["copy", "print"],
    //     language: {
    //         paginate: {
    //             previous: "<i class='mdi mdi-chevron-left'>",
    //             next: "<i class='mdi mdi-chevron-right'>",
    //         },
    //     },
    //     drawCallback: function () {
    //         $(".dataTables_paginate > .pagination").addClass(
    //             "pagination-rounded"
    //         );
    //     },
    // });
    var a = $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: [
            {
                extend: "copy",
                className: "btn-secondary",
            },
            {
                extend: "print",
                className: "btn-secondary",
            },
            {
                extend: "csv",
                className: "btn-secondary",
            },
            {
                extend: "excel",
                className: "btn-secondary",
                title: "Entity Data Export",
            },
            {
                extend: "pdf",
                className: "btn-secondary",
                title: "Entity Data Export",
                // Konfigurasi khusus untuk PDF
                customize: function(doc) {
                    // Mengatur font dan ukuran
                    doc.defaultStyle.fontSize = 10;
                    doc.styles.tableHeader.fontSize = 11;
                    doc.styles.tableHeader.alignment = 'center';
                    
                    // Menengahkan tabel dalam halaman
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    
                    // Mengatur lebar margin
                    doc.pageMargins = [20, 20, 20, 20];
                    
                    // Mengatur orientasi landscape jika kolom banyak
                    // if (doc.content[1].table.body[0].length > 5) {
                    //     doc.pageOrientation = 'landscape';
                    // }

                    // Mengatur orientasi portrait jika kolom banyak
                    if (doc.content[1].table.body[0].length > 5) {
                        doc.pageOrientation = 'portrait';
                    }
                    
                    // Menambahkan style untuk header dan body
                    var rowCount = doc.content[1].table.body.length;
                    for (var i = 0; i < rowCount; i++) {
                        doc.content[1].table.body[i].forEach(function(cell, cellIndex) {
                            if (i === 0) {
                                // Style untuk header
                                cell.fillColor = '#4e73df';
                                cell.color = '#ffffff';
                            } else {
                                // Style untuk baris ganjil dan genap
                                cell.fillColor = i % 2 === 0 ? '#f8f9fc' : '#ffffff';
                            }
                            
                            // Menengahkan konten dalam sel
                            cell.alignment = 'center';
                        });
                    }
                }
            },
        ],
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>",
            },
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
    });
    $("#selection-datatable").DataTable({
        select: { style: "multi" },
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>",
            },
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
    }),
        a
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        }),
        $("#scroll-vertical-datatable").DataTable({
            scrollY: "350px",
            scrollCollapse: !0,
            paging: !1,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        }),
        $("#scroll-horizontal-datatable").DataTable({
            scrollX: !0,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        }),
        $("#complex-header-datatable").DataTable({
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
            columnDefs: [{ visible: !1, targets: -1 }],
        }),
        $("#row-callback-datatable").DataTable({
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
            createdRow: function (a, e, t) {
                15e4 < +e[5].replace(/[\$,]/g, "") &&
                    $("td", a).eq(5).addClass("text-danger");
            },
        }),
        $("#state-saving-datatable").DataTable({
            stateSave: !0,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        }),
        $("#fixed-columns-datatable").DataTable({
            scrollY: 300,
            scrollX: !0,
            scrollCollapse: !0,
            paging: !1,
            fixedColumns: !0,
        }),
        $(".dataTables_length select").addClass("form-select form-select-sm"),
        $(".dataTables_length label").addClass("form-label");
}),
    $(document).ready(function () {
        var a = $("#fixed-header-datatable").DataTable({
            responsive: !0,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        });
        new $.fn.dataTable.FixedHeader(a);
    });
