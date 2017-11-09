@extends('mainLayouts.main')

@section('menu_dashboard', 'open active')

@section('content')
    <form></form>
    {!! Form::open(['url' => '/product', 'method' => 'post', 'files' => true]) !!}

<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">

    @include('product.create.product_description')
    @include('product.create.sale_details')
    @include('product.create.shipment_details')

</div>
   </form>
@include('product.modals.specifics')
@endsection

