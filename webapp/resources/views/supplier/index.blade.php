@extends('adminLayouts.app')

@section('supplier', 'open active')
@section('title', 'PROVEEDORES')
@section('title-description', 'Registre un nuevo proveedor')

@section('content')
    <div class="card">
        <form action="/add_supplier" method="POST">

        

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail3">Nombre de la compañia</label>
                        <input type="text" class="form-control" id="companyName" name="companyName">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail3">Nombre de contacto</label>
                        <input type="text" class="form-control" id="contactName" name="contactName">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail3">Producto</label>
                        <input type="text" class="form-control" id="product" name="product">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputEmail3">Direccion</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-success has-feedback">
                        <label for="inputEmail3">Telefono</label>
                        <input type="text" class="form-control underlined" id="phono" name="phono">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-success has-feedback">
                        <label for="inputEmail3">Correo</label>
                        <input type="email" class="form-control underlined" id="email" name="email">
                    </div>
                </div>
            </div>

        <div class="card-footer">
            <button id="createSupplierButton" type="button" class="btn btn-info btn-fill pull-right">Registrar</button>
            <div class="clearfix"></div>
        </div>
        </form>

    </div>

    <section class="section">

    </section>
@endsection