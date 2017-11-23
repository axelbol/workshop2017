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
                <select class="form-control" name="condition" id="condition">
                    <option style="display:none" disabled selected value>Seleccione una opción</option>
                    <option value="Para estrenar">Para estrenar</option>
                    <option value="Como nuevo">Como nuevo</option>
                    <option value="Muy bien">Muy bien</option>
                    <option value="Bien">Bien</option>
                    <option value="Aceptable">Aceptable</option>
                </select>
            </div>
        </div>

        <div class="form-group row" id="conditiondescription" style="display:none">
            {{ Form::label('conditiondescription', 'Descripción del Estado', ['class' => 'col-sm-2 col-form-label']) }}

            <div class="col-sm-10">
                {{ Form::textarea('conditiondescription', '', ['class' => 'form-control', 'rows' => '3']) }}
            </div>
        </div>

        <div class="form-group row">

            {!! Form::label('specifics', 'Caracterizticas del producto', ['class' => 'col-sm-2 col-form-label']); !!}
            <div class="col-sm-10">
                {!! Form::button('Añadir caracteriztica ', ['class' => 'btn btn-primary-outline',
                'data-toggle' => 'modal',
                'data-target' => '#specificsModal']); !!}
                <div class="form-group"></div>
                <div class="form-group row">
                    <div id="xd">

                    </div>

                </div>
            </div>
        </div>



        <div class="form-group row">
            {{ Form::label('productdescription', 'Descripción del Producto', ['class' => 'col-sm-2 col-form-label']) }}

            <div class="col-sm-10">
                {{ Form::textarea('productdescription', '', ['class' => 'form-control', 'rows' => '3']) }}
            </div>
        </div>


    </div>
</div>