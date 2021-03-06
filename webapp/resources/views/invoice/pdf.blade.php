<html>
<head>
    <style>
        .header{background:#eee;color:#444;border-bottom:1px solid #ddd;padding:10px;}

        .client-detail{background:#ddd;padding:10px;}
        .client-detail th{text-align:left;}

        .items{border-spacing:0;}
        .items thead{background:#ddd;}
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
        Comprobante # {{ str_pad ($seller->id, 7, '0', STR_PAD_LEFT) }}
        <small>
            Emitido el {{ $seller->created_at }}
        </small>
    </h1>
</div>
<table class="client-detail">
    <tr>
        <th style="width:100px;">
            Cliente
        </th>
        <td>{{ $seller->name }}</td>
    </tr>
    <tr>
        <th>Ruc</th>
        <td>{{ $seller->last_name }}</td>
    </tr>
    <tr>
        <th>Dirección</th>
        <td>{{ $seller->name }}</td>
    </tr>
</table>

<hr />

<table class="items">
    <thead>
    <tr>
        <th class="text-left">Producto</th>
        <th class="text-right" style="width:100px;">Cantidad</th>
        <th class="text-right" style="width:100px;">P.U</th>
        <th class="text-right" style="width:100px;">Total</th>
    </tr>
    </thead>
    <tbody>
    <td>{{ $seller->id }}</td>
    <td>{{ $seller->name }}</td>
    <td>{{ $seller->phono }}</td>
    <td>{{ $seller->email }}</td>


    </tbody>



</table>
</body>
</html>