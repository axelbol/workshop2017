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
                        <option style="display:none" disabled selected value>Seleccione una opción</option>
                        <option value="Precio fijo">Precio fijo</option>
                        <option value="Subasta">Subasta</option>
                    </select>
                </div>
            </div>

            <div class="form-group row" id="sell-format" style="display:none">
                {{ Form::label('duration', 'Duración', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <select class="form-control" name="duration" id="duration">
                        <option style="display:none" disabled selected value>--</option>
                        <option value="3">3 dias</option>
                        <option value="5">5 dias</option>
                        <option value="7">7 dias</option>
                        <option value="10">10 dias</option>
                        <option value="30" id="fix_price">30 dias</option>
                        <option value="Hasta que se cancele" id="fix_price">Hasta que se cancele</option>
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

            <div class="form-group row" id="sell-format" style="display:none">
                {{ Form::label('price', 'Precio', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <div id="fixed-price-options">

                    <div class="row">
                        {{ Form::label('buynowprice', 'Precio de Venta', ['class' => 'col-sm-2 col-form-label']) }}
                        {{ Form::text('buynowprice', '', ['class' => 'form-control col-sm-1', 'placeholder' => '', 'id'=>'buy-now-price']) }}
                    </div>
                        <div class="form-check">
                            <label>
                                <input id="allowoffer" class="checkbox" type="checkbox" name="allowoffer" value="true">
                                <span>Permitir a los usuarios hacer ofertas</span>
                            </label>
                        </div>

                    <div class="col" id="special-prices" style="display:none">
                        <div class="row">
                            <div class="form-check">
                                <label>
                                    <input id="atleastoffer" class="checkbox" type="checkbox" name="atleastoffer" value="true">
                                    <span>Automaticamente aceptar ofertas de almenos</span>
                                </label>
                            </div>
                            {{ Form::text('atleastofferis', '', ['class' => 'form-control col-sm-2', 'placeholder' => '', 'disabled', 'id'=>'atleastofferis']) }}
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <label>
                                    <input id="lowoffer" class="checkbox" type="checkbox" name="lowoffer" value="true">
                                    <span>Automaticamente rechazar ofertas menores a</span>
                                </label>
                            </div>
                            {{ Form::text('lowofferis', '', ['class' => 'form-control col-sm-2', 'placeholder' => '','disabled','id'=>'lowofferis']) }}
                        </div>
                    </div>
                    </div>

                    <div id="action-price-options">
                        <div class="row">
                            <div class="col-sm-3">
                            {{ Form::label('startprice', 'Precio de inicio', ['class' => 'col-sm-10 col-form-label']) }}
                            </div>
                            <div class="col-sm-3">
                            {{ Form::label('buyprice', 'Precio de compra', ['class' => 'col-sm-10 col-form-label']) }}
                            </div>
                            <div class="col-sm-3">
                            {{ Form::label('reserveprice', 'Precio de reserva', ['class' => 'col-sm-10 col-form-label']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                {{ Form::text('startprice', '', ['class' => 'form-control col-sm-6', 'placeholder' => '', 'id'=>'start-price']) }}
                            </div>
                            <div class="col-sm-3">
                                {{ Form::text('buyprice', '', ['class' => 'form-control col-sm-6', 'placeholder' => '', 'id'=>'buy-price']) }}
                            </div>
                            <div class="col-sm-3">
                                {{ Form::text('reserveprice', '', ['class' => 'form-control col-sm-6', 'placeholder' => '', 'id'=>'reserve-price']) }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row" id="sell-format" style="display:none">
                {{ Form::label('cuantity', 'Cantidad', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('cuantity', '', ['class' => 'form-control col-sm-2', 'placeholder' => '', 'id' => 'cuantity']) }}
                    <div class="form-check">
                        <label>
                            <input id="lot" class="checkbox" type="checkbox" name="lot" value="true">
                            <span>Vender como lote</span>
                        </label>
                    </div>
                    <div id="lot-sel" style="display:none" class="row">
                        {{ Form::label('cuantitylot', 'Cantidad de articulos en el lote', ['class' => 'col-sm-4 col-form-label']) }}
                        {{ Form::text('cuantitylot', '', ['class' => 'form-control col-sm-2', 'placeholder' => '', 'id' => 'cuantity_lot']) }}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('private', 'Anauncio privado', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <label>
                        <input class="checkbox" type="checkbox" name="private" value="true">
                        <span>Permitir que los compradores permanezcan anónimos para otros usuarios</span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('donate', 'Hacer una donación', ['class' => 'col-sm-2 col-form-label']) }}

                <div class="col-sm-10">
                    <label>
                        <input class="checkbox " type="checkbox" id="make-don" name="donation" value="true">
                        <span>Done un porcentaje de su venta a la organización benéfica de su elección.</span>
                    </label>
                    <div id="donation" style="display:none">
                        <div class="row">
                            {{ Form::label('donationpercent ', 'Porcentaje de donación', ['class' => 'col-sm-3 col-form-label']) }}
                            <select id="donation-percent" class="c-select form-control boxed col-sm-1" name="donationpercent">
                                <option style="display:none" disabled selected value>--</option>
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
                                <input class="checkbox" type="checkbox" id="paypal" name="paypal" value="true">
                                <span>PayPal</span>
                            </label>
                            <div class="row" id="paypal-email" style="display:none">
                                {{ Form::label('emailpayment', 'Correo electrónico para recibir el pago:', ['class' => 'col-sm-5 col-form-label']) }}
                                {{ Form::text('emailpayment', '', ['class' => 'form-control col-sm-4 ', 'placeholder' => '', 'id'=>'email-payment']) }}
                            </div>
                        </div>

                        <div>
                            <label>
                                <input class="checkbox" type="checkbox" name="pickpayment" value="true">
                                <span>Recibir el pago al momento de recoger el producto</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('paymentdescription', 'Instrucciones adicionales de pago', ['class' => 'col-sm-10 col-form-label']) }}
                        {{ Form::textarea('paymentdescription', '', ['class' => 'form-control', 'rows' => '3']) }}
                    </div>

                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('returnoptions', 'Opciones de devolución', ['class' => 'col-sm-2 col-form-label']) }}

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
                                    <select name="devolutiontime" class="c-select form-control boxed col-sm-2">
                                        <option style="display:none" disabled selected value>--</option>
                                        <option value="15">15 dias</option>
                                        <option value="30">30 dias</option>
                                        <option value="60">60 dias</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('refund', 'El reembolso será dado como:', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="refund" class="c-select form-control boxed col-sm-7">
                                        <option style="display:none" disabled selected value>Seleccione una opción</option>
                                        <option value="Devolucion del dinero">Devolución del dinero</option>
                                        <option value="Devolución del dinero o reemplazo del producto">Devolución del dinero o reemplazo del producto</option>
                                        <option value="Devolución del dinero o intercambio por otro producto">Devolución del dinero o intercambio por otro producto</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('returnshipment', 'El envío de devolución será pagado por:', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="returnshipment" class="c-select form-control boxed col-sm-2">
                                        <option style="display:none" disabled selected value>--</option>
                                        <option value="Comprador">Comprador</option>
                                        <option value="Vendedor">Vendedor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('returndetails', 'Detalles adicionales de la política de devolución:', ['class' => 'col-sm-10 col-form-label']) }}
                                    {{ Form::textarea('returndetails', '', ['class' => 'form-control', 'rows' => '3']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('restitutionfee', '¿Cobra una tarifa de reabastecimiento?', ['class' => 'col-sm-10 col-form-label']) }}
                                    <select name="restitutionfee" class="c-select form-control boxed col-sm-1">
                                        <option style="display:none" disabled selected value>--</option>
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