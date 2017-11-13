<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">

@extends('adminLayouts.app')

@section('usuarios', 'open active')
@section('title', 'Vendedores')
@section('title-description', 'Lista de vendedores registrados')
@section('content')
    <section class="section">

        <table id="sellers-table">
            <thead>
                <tr>
                    <td> id </td>
                    <td> name </td>
                    <td> last_name </td>
                    <td> address </td>
                    <td> city </td>
                    <td> email </td>
                    <td> phono </td>
                    <td> phono </td>
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
                    ajax: 'http://localhost/workshop2017/webapp/public/get_datatableSeller',

                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'last_name'},
                        {data: 'address'},
                        {data: 'city'},
                        {data: 'email'},
                        {data: 'phono'},
                        {data:  null,
                         defaultContent:"<a href=\"{{url('/home')}}\"> <button class='btn btn-info'>axel</button></a>"},

                    ]

                });
            });


        </script>

    </section>
@endsection