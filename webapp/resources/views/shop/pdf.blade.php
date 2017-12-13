<html>
<head>
    <style>
        .header{background:#eee;color:#444;border-bottom:1px solid #ddd;padding:10px;}

        .client-detail{background:#ddd;padding:10px;}
        .client-detail th{text-align:left;}

        .items{border-spacing:0;}
        .items thead{background:#dc3545;}
        .items tbody{background:#eee;}
        .items tfoot{background:#ddd;}
        .items th{padding:10px;}
        .items td{padding:10px;}

        h1 small{display:block;font-size:16px;color:#888;}

        table{width:100%;}
        .text-right{text-align:right;}
    </style>
</head>
<body>

<div class="header">
    <h1>
        Comprobante # {{ str_pad ($order->id, 7, '0', STR_PAD_LEFT) }}
        <small>
            Emitido el {{ $order->created_at }}
        </small>
    </h1>
</div>
<table class="client-detail">
    <tr>
        <th style="width:100px;">
            Cliente
        </th>
        <td>{{ $order->name }}</td>
    </tr>
    <tr>
        <th>Nit</th>
        <td>{{ $order->nit }}</td>
    </tr>
    <tr>
        <th>Dirección</th>
        <td>{{ $order->address }}</td>
    </tr>
</table>

<hr />

<table class="items">
    <thead>
    <tr>
        <th class="text-left">Nombre</th>
        <th class="text-right" style="width:100px;">Apellido</th>
        <th class="text-right" style="width:100px;">Direccion</th>
        <th class="text-right" style="width:100px;">Total</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$order->name}}</td>
            <td class="text-right">{{$order->last_name}}</td>
            <td class="text-right">{{$order->address}}</td>
            <td class="text-right">Bs. {{$order->total_price}}</td>
        </tr>
    </tbody>



    <tfoot>
    <tr>
        <td colspan="3" class="text-right"><b>TOTAL</b></td>
        <td class="text-right">BS. {{ number_format($order->total_price, 2) }}</td>
    </tr>



    </tfoot>
</table>
</body>
</html>