<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">

@extends('adminLayouts.app')

@section('usuarios', 'open active')
@section('title', 'Usuarios')
@section('title-description', 'Lista de usuarios registrados')
@section('content')
    <section class="section">

<table id="users-table">
    <thead>
        <tr>
                <td> id </td>
                <td> name </td>
                <td> email </td>
                <td> created_at </td>
        </tr>
    </thead>
</table>


<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script type="text/javascript">

    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost/workshop2017/webapp/public/get_datatable',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'created_at'}
            ]
        });
    });

</script>

    </section>
@endsection