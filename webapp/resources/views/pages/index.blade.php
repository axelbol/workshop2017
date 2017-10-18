@extends('layouts.app')

@section('list_account', 'open active')
@section('title', 'Usuarios')
@section('title-description', 'Lista de usuarios registrados')

@section('content')
    <section class="section">

        <a href="{{url('/create_personal_account')}}" class="btn btn-info">Registrar Nuevo Usuario</a>

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th>TIPO</th>
                <th>ACCION</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->type == "seller")
                                <span class="label label-danger">{{ $user->type }}</span>
                            @else
                                <span class="label label-primary">{{ $user->type }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                            <a href="{{url('/destroy_account', $user->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}

    </section>
@endsection