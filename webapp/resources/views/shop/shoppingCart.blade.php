@extends('userLayouts.app')

@section('carrito','open active')
@section('title', 'PRODUCTOS')
@section('title-description', 'Productos añadidos al carrito de compras')

@section('content')

{!! Form::open(['route' => 'product.save', 'method' => 'post']) !!}

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>{{ $product['qty'] }}</strong>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }} Bs.</span>


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
            {!! Form::submit('Registrar', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        </div>


    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items</h2>
            </div>
        </div>
    @endif

{!! Form::close() !!}

@endsection