@extends('mainLayouts.main')

@section('menu_dashboard', 'open active')

@section('content')

<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">

    <div class="card card-primary">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> Descripción del Producto </p>
            </div>
        </div>
        <div class="card-block">

            <div class="form-group row">
                {{ Form::label('title', 'Título', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('subtitle', 'Subtítulo', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('subtitle', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('category', 'Categoria', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('isbn', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('condition', 'Estado', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <select class="form-control" name="condition">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('con_des', 'Descripción del Estado', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::textarea('con_des', '', ['class' => 'form-control', 'rows' => '3']) }}
                </div>
            </div>

            <div class="form-group row">

                {!! Form::label('specifics', 'Caracterizticas del producto', ['class' => 'col-sm-2 col-form-label']); !!}
                <div class="col-sm-10">
                    {!! Form::button('Añadir caracteriztica ', ['class' => 'btn btn-light',
                                                                'data-toggle' => 'modal',
                                                                'data-target' => '#specificsModal']); !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-md-2">

                </div>
                <div class="form-group col-md-2">
                    <x>
                    </x>
                </div>
                <div class="form-group col-md-2">
                    <y>
                    </y>
                </div>
                <div class="form-group col-md-2">
                    <z>
                    </z>
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('con_des', 'Descripción del Producto', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::textarea('pro_desc', '', ['class' => 'form-control', 'rows' => '3']) }}
                </div>
            </div>


        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> Detalles de Venta </p>
            </div>
        </div>
        <div class="card-block">

            <div class="form-group row">
                {{ Form::label('title', 'Título', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Título']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('subtitle', 'Subtítulo', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('subtitle', '', ['class' => 'form-control', 'placeholder' => 'Subtítulo']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('category', 'Categoria', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Categoria']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('isbn', '', ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> Descripción del Producto </p>
            </div>
        </div>
        <div class="card-block">

            <div class="form-group row">
                {{ Form::label('title', 'Título', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Título']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('subtitle', 'Subtítulo', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('subtitle', '', ['class' => 'form-control', 'placeholder' => 'Subtítulo']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('category', 'Categoria', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Categoria']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('isbn', '', ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
                </div>
            </div>
        </div>
    </div>

</div>

@include('product.modals.specifics')
@endsection

