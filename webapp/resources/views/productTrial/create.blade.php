@extends('userLayouts.app')

@section('carrito','open active')
@section('title', 'AGREGAR PRODUCTOS')
@section('title-description', 'Agregue sus productos preferidos')

@section('content')
    {!! Form::open(['route' => 'trial.store', 'method' => 'post']) !!}
    <div class="card-content">
        <h4>PRODUCTOS</h4>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('title', 'Nombre del producto') !!}
                    {!! Form::text('title', null, ['class' => "form-control", 'required']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('description', 'Descripción corta') !!}
                    {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('price', 'Precio') !!}
                    {!! Form::text('price', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('imagePath', 'Foto') !!}
                    {!! Form::file('imagePath', array('class' => "form-control", 'required')) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('REGISTRAR', ['class' => 'btn btn-info btn-fill pull-right']) !!}
    </div>
    {!! Form::close() !!}
@endsection