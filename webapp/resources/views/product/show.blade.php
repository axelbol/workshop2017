@extends('mainLayouts.main')

@section('menu_dashboard', 'open active')

@section('content')
    <div class="title-block">
        <h3 class="title"> {{$product->title}}
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
    <div class="card card-block">
        <div class="form-group row">
            <div class="form-group col-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-500" src="..." alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-500" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-500" src="..." alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="form-group col-5">
                <div class="form-group row">
                    <p class="text-primary">{{$product->subtitle}}</p>
                </div>
                <hr>
                <div class="form-group row">
                    Estado del articulo:  <p class="text-success">{{$product->condition}}</p>
                </div>
                <div class="card">
                    Precio de venta: {{ $product->fixedprice->buynowprice }}
                </div>
            </div>
        </div>

    </div>
@endsection

