@extends('layouts.app')

@section('menu_dashboard', 'open active')
@section('title', 'Página Principal')
@section('title-description', 'Administración de los catalogos del sistema')

@section('content')
<section class="section">
 {{ session('user')->email }}
</section>
@endsection	