@extends('adminLayouts.app')

@section('usuarios', 'open active')
@section('title', 'Usuarios')
@section('title-description', 'Lista de usuarios registrados')

@section('content')
    <section class="section">

        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de creación</th>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->created_at }} </td>



                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $users->render() !!}

    </section>
@endsection