var datatable_route = $('input[name=\'datatable_route\']').val();
var form_route = $('input[name=\'form_route\']').val();

function get_datatables() {
    $('#table-data').DataTable({
        processing: true,
        serverSide: true,
        ajax: datatable_route,
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'id',
                name: 'id'
            },
            {
                data: 'id_button',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'description',
                name: 'description'
            }
        ],
        columnDefs: [{
                'targets': 0,
                'searchable': false,
                'orderable': false,
                'className': 'dt-center'
            },
            {
                'targets': 1,
                'visible': false,
                'searchable': false,
                'className': 'dt-center'
            },
            {
                'targets': 2,
                'searchable': false,
                'orderable': false
            },
        ],
        order: [1, 'asc']
    });
}

function show_form(id) {
    var data;
    if (id !== '') {
        data.id = id;
    }
    get_page(form_route, data)
        .then(response => {
            content.prepend(response);
        })
        .fail(error => {
            console.log(error.response);
        });
}

$(document).on('click', '.btn-add-data', () => {
    show_form('');
});

$(document).ready(() => {
    get_datatables();
});
