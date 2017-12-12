@extends('userLayouts.app')

@section('home', 'open active')

@section('title', 'BIENVENIDO')
@section('title-description', '')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobantes
            </h2>

            <a class="btn btn-info btn-lg btn-block" href="{{url('invoice_add')}}">Nuevo comprobante</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th style="width:100px;" class="text-right">IVA</th>
                        <th style="width:160px;" class="text-right">Sub Total</th>
                        <th style="width:160px;" class="text-right">Total</th>
                        <th style="width:180px;" class="text-right">Creado</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1;$i<=10;$i++):?>
                        <?php
                            $total      =   1180*$i;
                            $subTotal   =   $total/1.18;
                            $iva        =   $total-$subTotal;
                        ?>

                    <tr>
                        <td>Client {{$i}}</td>
                        <td class="text-right">$ {{number_format($iva, 2)}}</td>
                        <td class="text-right">$ {{number_format($subTotal, 2)}}</td>
                        <td class="text-right">$ {{number_format($total, 2)}}</td>
                        <td class="text-right">02/02/12</td>
                        
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection