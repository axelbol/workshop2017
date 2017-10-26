@extends('try.layout.main')

@section('content')
    <div class="container">


        <div class="card">
            <div class="card-header">
                Crea el anuncio para tu producto
            </div>
            <div class="card-body">
                {!! Form::open(['url' => '/store_product', 'method' => 'post', 'files' => true]) !!}
                <div class="form-group row">

                    {!! Form::label('title', 'Titulo', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::text('title', '', ['placeholder' => 'Titulo', 'class' => 'form-control']); !!}

                    </div>
                </div>
                <div class="form-group row">

                    {!! Form::label('subtitle', 'Subtitulo', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::text('subtitle', '', ['placeholder' => 'Subtitulo', 'class' => 'form-control']); !!}

                    </div>
                </div>
                <div class="form-group row">

                    {!! Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::text('isbn', '', ['placeholder' => 'ISBN', 'class' => 'form-control']); !!}

                    </div>
                </div>
                <div class="form-group row">

                    {!! Form::label('condition', 'Estado', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::select('condition', ['Para estrenar' => 'Para estrenar',
                                                        'Como nuevo' => 'Como nuevo',
                                                        'Muy bueno' => 'Muy bueno',
                                                        'Bueno' => 'Bueno',
                                                        'Aceptable' => 'Aceptable'], null,['placeholder' => '--',
                                                                                            'class' => 'form-control']);;
                         !!}
                    </div>
                </div>
                <div class="form-group row">

                    {!! Form::label('image', 'Imagenes', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::file('image', ['class' => 'form-control-file']); !!}
                    </div>
                </div>
                <div class="form-group row">

                    {!! Form::label('specifics', 'Caracterizticas del producto', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::button('Añadir caracteriztica ', ['class' => 'btn btn-light',
                                                                    'data-toggle' => 'modal',
                                                                    'data-target' => '#exampleModal']); !!}
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
                </div>
                <div class="form-group row">

                    {!! Form::label('description', 'Descripción del producto', ['class' => 'col-sm-2 col-form-label']); !!}
                    <div class="col-sm-10">
                        {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '4']); !!}
                    </div>
                </div>
                <div class="card-footer text-muted">
                    {!! Form::submit('Publicar', ['class' => 'btn btn-primary']); !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escriba un detalle único que a sus compradores pueda interesar.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="trait" aria-describedby="emailHelp">
                        <small id="traitHelp" class="form-text text-muted">Por ejemplo: marca, material o año.</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="desc" aria-describedby="emailHelp">
                        <small id="descHelp" class="form-text text-muted">Por ejemplo: Ty, Plastico o 2007</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btn1" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection