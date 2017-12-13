<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">

@extends('adminLayouts.app')

@section('usuarios', 'open active')
@section('title', 'VENDEDORES')
@section('title-description', 'Lista de vendedores registrados')
@section('content')
    <section class="section">

        <table id="sellers-table">
            <thead>
            <tr>
                <td> ID </td>
                <td> Fecha </td>
                <td> Nombre </td>
                <td> Apellido </td>
                <td> Direccion </td>
                <td> Precio </td>
                <td> PDF </td>
            </tr>
            </thead>
        </table>


        <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
        <script type="text/javascript">

            $(function() {
                $('#sellers-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: 'http://localhost/workshop2017/webapp/public/get_datatableCart',
                    columns: [
                        {data: 'id'},
                        {data: 'created_at'},
                        {data: 'name'},
                        {data: 'last_name'},
                        {data: 'address'},
                        {data: 'total_price'},
                        {
                            "mRender": function(data, type, row) {
                                return '<a class="btn btn-small btn-danger" href=' + row.id + '/pdf>PDF</a>';
                            }
                        },
                    ]
                });
            });

        </script>

    </section>
@endsection