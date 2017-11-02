@extends('adminLayouts.app')

@section('home', 'open active')

@section('title', 'BIENVENIDO')
@section('title-description', '')

@section('content')
    <div class="title-block">
        <h1 class="title"> @yield('title') </h1>
        <p class="title-description"> @yield('title-description') </p>
    </div>
    <section class="section">

    </section>
@endsection