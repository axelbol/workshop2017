@extends('indexLayouts.master')
@section('content')

    @foreach($products->chunk(3) as $productChunk)

        <div class="row">

            @foreach($productChunk as $product)

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->imagePath }}" alt="..."
                             style="max-height: 250px" class="img-responsive">
                        <div class="caption">
                            <h3>{{$product->title}}</h3>
                            <p>{{$product->description}}</p>
                            <div class="clearfix">
                                <div class="pull right">Bs. {{$product->price}}</div>
                                <a href="#" class="btn btn-primary" role="button">Añadir a carrito</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    @endforeach
@endsection