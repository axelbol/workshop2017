<div class="card card-primary">
    <div class="card-header">
        <div class="header-block">
            <p class="title"> Detalles de Venta </p>
        </div>
    </div>
    <div class="card-block">
        <div id="fixed-price">

            <div class="form-group row">
                {{ Form::label('format', 'Formato', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <select id="format" class="form-control" name="format">
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('duration', 'Duración', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <select class="form-control" name="duration">
                        <option>1</option>
                        <option>2</option>
                    </select>
                    <div class="form-group">
                        <div>
                            <label>
                                <input class="radio" name="ad" type="radio">
                                <span>Crear el anuncio en cuanto lo termine.</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input class="radio" type="radio" name="ad">
                                <span>Programar para que empieze</span>
                            </label>
                        </div>

                    </div>

                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('price', 'Precio', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('price', '', ['class' => 'form-control', 'placeholder' => '']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('cuantity', 'Cantidad', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('cuantity', '', ['class' => 'form-control', 'placeholder' => '']) }}
                    <div class="form-check">
                        <label>
                            <input id="lot" class="checkbox" type="checkbox">
                            <span>Vender como lote</span>
                        </label>
                    </div>
                    <div id="lot-sel" style="display:none">
                        {{ Form::label('cuantity_lot', 'Cantidad de articulos en el lote', ['class' => 'col-sm-4 col-form-label']) }}
                        {{ Form::text('cuantity_lot', '', ['class' => 'form-control col-sm-2', 'placeholder' => '']) }}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('private', 'Anauncio privado', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <label>
                        <input class="checkbox" type="checkbox">
                        <span>Permitir que los compradores permanezcan anónimos para otros usuarios</span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('donate', 'Hacer una donación', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <label>
                        <input class="checkbox " type="checkbox" id="make-don">
                        <span>Done un porcentaje de su venta a la organización benéfica de su elección.</span>
                    </label>
                    <div id="donation" style="display:none">
                        <div class="row">
                            {{ Form::label('don_per ', 'Porcentaje de donación', ['class' => 'col-sm-3 col-form-label']) }}
                            <select class="c-select form-control boxed col-sm-1" name="don_per">
                                <option value="100">100%</option>
                                <option value="95">95%</option>
                                <option value="90">90%</option>
                                <option value="85">85%</option>
                                <option value="80">80%</option>
                                <option value="75">75%</option>
                                <option value="70">70%</option>
                                <option value="65">65%</option>
                                <option value="60">60%</option>
                                <option value="55">55%</option>
                                <option value="50">50%</option>
                                <option value="45">45%</option>
                                <option value="40">40%</option>
                                <option value="35">35%</option>
                                <option value="30">30%</option>
                                <option value="25">25%</option>
                                <option value="20">20%</option>
                                <option value="15">15%</option>
                                <option value="10">10%</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('pay_opt', 'Opciones de pago', ['class' => 'col-sm-2 col-form-label']) }}
                <div class="col-sm-10">
                    <div class="form-group">
                        <div>
                            <label>
                                <input class="checkbox" type="checkbox" id="paypal">
                                <span>PayPal</span>
                            </label>
                            <div class="row" id="paypal-email" style="display:none">
                                {{ Form::label('email', 'Correo electrónico para recibir el pago:', ['class' => 'col-sm-5 col-form-label']) }}
                                {{ Form::text('email', '', ['class' => 'form-control col-sm-4 ', 'placeholder' => '']) }}
                            </div>
                        </div>
                        <div>
                            <label>
                                <input class="checkbox" type="checkbox">
                                <span>Visa / MasterCard</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input class="checkbox" type="checkbox">
                                <span>Recibir el pago al momento de recoger el producto</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('pay_des', 'Instrucciones adicionales de pago', ['class' => 'col-sm-10 col-form-label']) }}
                        {{ Form::textarea('pay_des', '', ['class' => 'form-control', 'rows' => '3']) }}
                    </div>

                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('ret_opt', 'Opciones de devolución', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <div class="form-group">
                        <div>
                            <label>
                                <input class="radio" name="return" type="radio" value="true">
                                <span>Se aceptan devoluciones</span>
                            </label>
                            <div id="return" style="display:none">
                                <div class="form-group">
                                    {{ Form::label('time_dev', 'Despues de recibir el producto, tu comprador debera contactarte en el lapso de:', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="time_dev" class="c-select form-control boxed col-sm-2">
                                        <option value="15">15 dias</option>
                                        <option value="30">30 dias</option>
                                        <option value="60">60 dias</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('refund', 'El reembolso será dado como:', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="refund" class="c-select form-control boxed col-sm-7">
                                        <option value="Devolucion del dinero">Devolución del dinero</option>
                                        <option value="Devolución del dinero o reemplazo del producto">Devolución del dinero o reemplazo del producto</option>
                                        <option value="Devolución del dinero o intercambio por otro producto">Devolución del dinero o intercambio por otro producto</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('ret_ship', 'El envío de devolución será pagado por:', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="refund" class="c-select form-control boxed col-sm-2">
                                        <option value="Comprador">Comprador</option>
                                        <option value="Vendedor">Vendedor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('ret_opt', 'Detalles adicionales de la política de devolución:', ['class' => 'col-sm-10 col-form-label']) }}
                                    {{ Form::textarea('ret_opt', '', ['class' => 'form-control', 'rows' => '3']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('res_fee', '¿Cobra una tarifa de reabastecimiento?', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="res_fee" class="c-select form-control boxed col-sm-1">
                                        <option value="No">No</option>
                                        <option value="10">10%</option>
                                        <option value="15">15%</option>
                                        <option value="20">20%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>
                                <input class="radio" type="radio" name="return" value="false">
                                <span>No se aceptan devoluciones</span>
                            </label>
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>
</div>