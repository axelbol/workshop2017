@extends('adminLayouts.app')

@section('supplier', 'open active')
@section('title', 'PROVEEDORES')
@section('title-description', 'Registre un nuevo proveedor')

@section('content')
    <div class="card">
        {!! Form::open(['url'=>'/add_supplier', 'method'=>'POST']) !!}
        {{ csrf_field() }}
        <div class="card content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail3">Nombre de la compañia</label>
                        <input type="text" class="form-control" id="companyName" name="companyName">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">

    </section>
@endsection