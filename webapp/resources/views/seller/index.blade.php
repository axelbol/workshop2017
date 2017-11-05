@extends('userLayouts.app')

@section('','open active')
@section('title', 'VENDEDOR')
@section('title-description', 'Proporciona tu información de contacto')

@section('content')

    <div class="card">
        {!! Form::open(['url' => '/addseller', 'method' => 'POST']) !!}

        <div class="card-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => "form-control", 'required']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('last_name', 'Apellido') !!}
                        {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('address', 'Dirección') !!}
                        {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
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
                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-warning has-feedback">
                        {!! Form::label('phono', 'Numero de celular') !!}
                        {!! Form::number('phono', null, ['class' => 'form-control underlined', 'required']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection
