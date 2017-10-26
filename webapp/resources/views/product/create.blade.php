@extends('layouts.app')

@section('menu_dashboard', 'open active')
@section('title', 'Crea tu anuncio')
@section('title-description', 'Administración de los catalogos del sistema')

@section('content')
    <section class="section">
        {!! Form::open(['url' => '/store_product', 'method' => 'post', 'files' => true]) !!}
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Título: </label>
                    <div class="col-sm-10">
                        {!! Form::text('title', '', ['class' => 'form-control boxed', 'placeholder' => '', 'enctype'=>'multipart/form-data']); !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Subtitulo: </label>
                    <div class="col-sm-10">
                        {!! Form::text('subtitle', '', ['class' => 'form-control boxed', 'placeholder' => '']); !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Categoria: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="category">
                            <option selected>Selecciona la categoria del producto</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Condición: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="condition">
                            <option selected>Selecciona la conficion o estado del producto</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                </div>
                </div>
                <div>
                    {!! Form::file('photo', ['multiple']); !!}
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']); !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}


    </section>
@endsection