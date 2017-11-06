@extends('userLayouts.app')

@section('','open active')
@section('title', 'VENDEDOR')
@section('title-description', 'Edita tu información de contacto ' . $seller->name)

@section('content')

    <div class="card">
        {!! Form::open(['route' => ['seller.update', $seller], 'method' =>'PUT' ]) !!}

        <div class="card-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', $seller->name, ['class' => "form-control", 'required']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('last_name', 'Apellido') !!}
                        {!! Form::text('last_name', $seller->last_name, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('address', 'Dirección') !!}
                        {!! Form::text('address', $seller->address, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('city', 'Ciudad') !!}
                        {!! Form::select('city', ['La Paz' => 'La Paz', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi',
                                                  'Cochabamba' => 'Cochabamba', 'Chuquisaca' => 'Chuquisaca', 'Tarija' => 'Tarija',
                                                  'Pando' => 'Pando', 'Beni' => 'Beni', 'Santa Cruz' => 'Santa Cruz'], null, ['class' => 'form-control', 'placeholder' => 'Elija una ciudad', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('email', 'Correo') !!}
                        {!! Form::email('email', $seller->email, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-warning has-feedback">
                        {!! Form::label('phono', 'Numero de celular') !!}
                        {!! Form::number('phono', $seller->phono, ['class' => 'form-control underlined', 'required']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
