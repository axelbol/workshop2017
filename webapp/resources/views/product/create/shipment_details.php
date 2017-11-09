<div class="card card-primary">
    <div class="card-header">
        <div class="header-block">
            <p class="title"> Detalles de envio </p>
        </div>
    </div>
    <div class="card-block">

        <div class="form-group row">
            {{ Form::label('dom_ship', 'Envio Domestico', ['class' => 'col-sm-2 col-form-label']) }}

            <div class="col-sm-10">
                <div class="form-group">
                    <select class="c-select form-control boxed col-sm-7" name="dom_ship">
                        <option value="flat">Cargo de envío fijo</option>
                        <option value="calculated">El costo varia de acuerdo la ubicación del comprador</option>
                        <option value="freight">Envio de carga (para productos por encima de 30 Kg)</option>
                        <option value="no_ship">Sin envios (El producto se recoge localmente)</option>
                    </select>
                </div>
                <div class="form-group" id="shipping">
                    {{ Form::label('ser_ship', 'Servicio de envio', ['class' => 'col-sm-10 col-form-label']) }}
                    <div class="row">
                        <select class="c-select form-control boxed col-sm-4" name="ser_ship">
                            <option value="x">x</option>
                            <option value="y">y</option>
                            <option value="z">z</option>
                        </select>
                        {{ Form::label('cost_ship', 'Costo', ['class' => 'col-sm-1 col-form-label']) }}
                        {{ Form::text('cost_ship', '', ['class' => 'form-control col-sm-1 ', 'placeholder' => '', 'id' => 'cost_ship']) }}
                        <div class="col-sm-1"></div>
                        <label>
                            <input class="checkbox" type="checkbox" id="free_ship">
                            <span>Envio gratuito</span>
                        </label>

                    </div>
                </div>


            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('pack_info', 'Peso y dimensiones del paquete', ['class' => 'col-sm-2 col-form-label']) }}


            <div class="col-sm-10">
                <div class="row">
                    {{ Form::label('pack_type', 'Tipo de paquete', ['class' => 'col-sm-3 col-form-label']) }}
                    {{ Form::label('dimensions', 'Dimensiones', ['class' => 'col-sm-3 col-form-label']) }}
                </div>
                <div class="row">
                    <select class="c-select form-control boxed col-sm-3" name="pack_type">
                        <option value="Sobre">Sobre</option>
                        <option value="Sobre Grande">Sobre Grande</option>
                        <option value="Paquete">Paquete</option>
                        <option value="Paquete Grande">Paquete Grande</option>
                    </select>
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon">cm.</span>
                    </div>
                    x
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon">cm.</span>
                    </div>
                    x
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon">cm.</span>
                    </div>

                </div>
                <div class="row">
                    {{ Form::label('Weight', 'Peso', ['class' => 'col-sm-3 col-form-label']) }}
                </div>
                <div class="row">
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon">Kg.</span>
                    </div>
                    .
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                        <span class="input-group-addon">gr.</span>
                    </div>
                </div>


            </div>

        </div>

        <div class="form-group row">
            {{ Form::label('localization', 'Localizacion del producto', ['class' => 'col-sm-2 col-form-label']) }}

            <div class="col-sm-10">
                {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => '']) }}
            </div>
        </div>
        {!! Form::submit('Click Me!'); !!}

    </div>
</div>