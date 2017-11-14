$(document).ready(function() {
    var aa =0;
    $('#mainTable').DataTable({
        ajax: {
            url: '/catalog/dataTable',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'description' },
        ]
    });

    $('#sellersTable').DataTable({
        ajax: {
            url: '/get_datatableSeller',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'last_name' },
            { data: 'phono' },
            { data: 'email' },
            {
                "mRender": function(data, type, row) {
                    return '<a class="btn btn-small btn-primary" href=providers/' + row.id + '>Ver</a>';
                }
            },
            {
                "mRender": function(data, type, row) {
                    return '<a class="btn btn-small btn-primary" href=providers/' + row.id + '/edit>Editar</a>';
                }
            }
        ]
    });




    $("#btn1").click(function(){

        $("#xd").append("<div id='"+aa+"' class='row'><input id='"+aa+"'  name='feature[]' class='form-control col-sm-4' type='text' readonly value='"+$('#trait').val()+"'>" +
            "<input id='"+aa+"'  name='feature[]' class='form-control col-sm-4' type='text' readonly value='"+$('#desc').val()+"'>" +
            "<button id='btn2' data-id='"+aa+"' class='form-control col-sm-4'>Eliminar</button></div>")
        aa++;
        /*
        $("x").append("<input id='"+aa+"'  name='feature[]' class='form-control' type='text' readonly value='"+$('#trait').val()+"'>");
        $("y").append("<input id='"+aa+"' name='desc[]' class='form-control' type='text' readonly value='"+$('#desc').val()+"'>");
        $("z").append("<button id='btn2' data-id='"+aa+"' class='form-control'>Eliminar</button>");
        aa++;*/
    });
    $('#xd').on('click','#btn2',function() {
        $(this).parent().remove();
    });
    $( "#format" ).change(function() {
        if(this.value== "Precio fijo")
        {
            $("div[id='sell-format']").show();
            $("option[id='fix_price']").attr({
                style:"",
            });
            $("#duration").val("--");
            $("#cuantity").val("").prop('disabled', false);
            $("#fixed-price-options").show();
            $("#action-price-options").hide();

            $("#start-price").val("");
            $("#buy-price").val("");
            $("#reserve-price").val("");

            $( "#allowoffer" ).prop('checked', false);

            $( "#lot" ).prop('checked', false);
            $("#lot-sel").hide();
            $("#cuantity_lot").val("");


        }
        if(this.value == "Subasta")
        {
            $("div[id='sell-format']").show();
            $("option[id='fix_price']").attr({
                style:"display:none",
            });
            $("#duration").val("--");
            $("#cuantity").val("1").prop('disabled', true);
            $("#fixed-price-options").hide();
            $("#action-price-options").show();

            $("#buy-now-price").val("")
            $( "#atleastoffer" ).prop('checked', false);
            $( "#lowoffer" ).prop('checked', false);
            $("#atleastofferis").prop('disabled', true).val("");
            $("#lowofferis").prop('disabled', true).val("");
            $( "#allowoffer" ).prop('checked', false);
            $("#special-prices").hide();

            $( "#lot" ).prop('checked', false);
            $("#lot-sel").hide();
            $("#cuantity_lot").val("");

        }
    });
    $( "#lot" ).change(function() {
        if(this.checked) {
            $("#lot-sel").show();
        }
        else {
            $("#lot-sel").hide();
            $("#cuantity_lot").val("");
        }


    });
    $( "#make-don" ).change(function() {
        if(this.checked) {
            $("#donation").show();
        }
        else {
            $("#donation").hide();
            $("#donation-percent").val("");
        }


    });
    $( "#paypal" ).change(function() {
        if(this.checked) {
            $("#paypal-email").show();
        }
        else {
            $("#paypal-email").hide();
            $("#email-payment").val("");
        }
    });
    $( "input:radio[name=return]" ).change(function() {
        if(this.value == "true") {
            $("#return").show();
        }
        else {
            $("#return").hide();
        }


    });
    $('select[name=domesticshipment]').on('change', function() {
        if(this.value == "flat") {
            $("#shipping").show();
        }
        else {
            $("#shipping").hide();
        }

    });
    $('select[name=condition]').on('change', function() {

        if(this.value == "Para estrenar") {
            $('textarea[name=conditiondescription]').val("");
            $("#conditiondescription").hide();

        }
        else {
            $("#conditiondescription").show();
        }

    });
    $( "#free_ship" ).change(function() {
        if(this.checked) {
            $("#cost_ship").prop('disabled', true).prop('value','0');

        }
        else {
            $("#cost_ship").prop('disabled', false).attr({
                "value":""
            });
        }
    });
    $( "#allowoffer" ).change(function() {
        if(this.checked) {
            $("#special-prices").show();
        }
        else {
            $("#special-prices").hide();
            $( "#atleastoffer" ).prop('checked', false);
            $( "#lowoffer" ).prop('checked', false);
            $("#atleastofferis").prop('disabled', true).val("");
            $("#lowofferis").prop('disabled', true).val("");
        }


    });
    $( "#atleastoffer" ).change(function() {
        if(this.checked) {
            $("#atleastofferis").prop('disabled', false);
        }
        else {
            $("#atleastofferis").prop('disabled', true).val("");
        }


    });
    $( "#lowoffer" ).change(function() {
        if(this.checked) {
            $("#lowofferis").prop('disabled', false);
        }
        else {
            $("#lowofferis").prop('disabled', true).val("");
        }


    });

});