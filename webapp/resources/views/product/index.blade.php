@extends('mainLayouts.main')

@section('menu_dashboard', 'open active')

@section('content')
    <div class="title-block">
        <h1 class="title"> Artículos <a href="{{ url('product/create') }}" class="btn btn-primary btn-sm rounded-s">Añadir nuevo</a></h1>
        <p class="title-description">Listado de todos los productos</p>
    </div>
    <section class="section">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <!--<div class="card-title-block">
                            <h3 class="title"> Responsive simple </h3>
                        </div>-->

                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="product-table">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Formato</th>
                                            <th>Estado</th>
                                            <th>Descripcion</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </section>
@push('ProductDataTable')
    <script>
        $(function() {
            $('#product-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url('product/productData') !!}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'format', name: 'format' },
                    { data: 'condition', name: 'condition' },
                    { data: 'productdescription', name: 'productdescription' },
                ]
            });
        });
    </script>
@endpush
@endsection