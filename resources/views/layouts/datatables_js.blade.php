<!-- Datatables -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.0.0/js/dataTables.searchPanes.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js"></script>

<script src="https://cdn.datatables.net/plug-ins/1.11.5/api/column().title().js"></script>

<script src="https://cdn.datatables.net/rowgroup/1.2.0/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.7/js/dataTables.scroller.min.js"></script>


<script>
    $(function () {
        function urlChange(table, url) {
            table.ajax.url(url).load();
        }

        function currencyFormatDE(num) {
            return (
                num
                    .toFixed(0) // always two decimal digits
                    .replace('.', ',') // replace decimal point character with ,
                    .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            ) // use . as a separator
        }

        $.extend( true, $.fn.dataTable.defaults, {
            language: {
                "sEmptyTable": "Nincs rendelkez??sre ??ll?? adat",
                "sInfo": "Tal??latok: _START_ - _END_ ??sszesen: _TOTAL_",
                "sInfoEmpty": "Nulla tal??lat",
                "sInfoFiltered": "(_MAX_ ??sszes rekord k??z??l sz??rve)",
                "sInfoPostFix": "",
                "sInfoThousands": " ",
                "sLengthMenu": "_MENU_ tal??lat oldalank??nt",
                "sLoadingRecords": "Bet??lt??s...",
                "sProcessing": "Feldolgoz??s...",
                "sSearch": "Keres??s:",
                "sZeroRecords": "Nincs a keres??snek megfelel?? tal??lat",
                "oPaginate": {
                    "sFirst": "Els??",
                    "sPrevious": "El??z??",
                    "sNext": "K??vetkez??",
                    "sLast": "Utols??"
                },
                "oAria": {
                    "sSortAscending": ": aktiv??lja a n??vekv?? rendez??shez",
                    "sSortDescending": ": aktiv??lja a cs??kken?? rendez??shez"
                },
                "select": {
                    "rows": {
                        "_": "%d sor kiv??lasztva",
                        "0": "",
                        "1": "1 sor kiv??lasztva"
                    }
                },
                "buttons": {
                    "print": "Nyomtat??s",
                    "colvis": "Oszlopok",
                    "copy": "M??sol??s",
                    "copyTitle": "V??g??lapra m??sol??s",
                    "copySuccess": {
                        "_": "%d sor m??solva",
                        "1": "1 sor m??solva"
                    }
                }
            },
            processing: true,
            pagingType: 'full_numbers',
            select: true,
            scrollY: 500,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Mind"]],
            dom: 'B<"clear">lfrtip',
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="far fa-copy"></i>',
                    titleAttr: 'M??sol??s',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },

                {
                    extend: 'csvHtml5',
                    text: '<i class="far fa-file-code"></i>',
                    titleAttr: 'CSV',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="far fa-file-excel"></i>',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                },
                {
                    extend: 'pdfHtml5',
                    text:      '<i class="far fa-file-pdf"></i>',
                    titleAttr: 'PDF',
                    exportOptions: {
                        columns: [ ':visible' ]
                    },
                }
            ],

        } );
    } );
</script>

