@extends('userLayouts.app')

@section('carrito','open active')
@section('title', 'PRODUCTOS')
@section('title-description', 'Productos añadidos al carrito de compras')

@section('content')


{!! Form::open(['route' => 'product.save', 'method' => 'post', 'files' => true]) !!}

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">

                            <strong>{{ $product['qty'] }}</strong>

                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }} Bs.</span>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">¿Qué quieres hacer?<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('product.reduceByOne',['id'=>$product['item']['id']])}}">Reducir</a></li>
                                    <li><a href="{{route('product.remove',['id'=>$product['item']['id']])}}">Eliminar</a></li>
                                </ul>
                            </div>


                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }} Bs.</strong>
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::submit('COMPRAR', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        </div>


    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Sin Productos</h2>
            </div>
        </div>
    @endif

    <!DATOS COMPRA!>
    <div class="card-content">
        <h4>DATOS PARA EL COMPROBANTE</h4>
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
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('nit', 'Nit') !!}
                    {!! Form::text('nit', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address', null, ['class' => "form-control", 'required']) !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('total_price', 'Precio Total') !!}
                    {!! Form::text('total_price', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

{!! Form::close() !!}

@endsection