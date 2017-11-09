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

    $("#btn1").click(function(){

        $("x").append("<input id='"+aa+"'  name='feature[]' class='form-control' type='text' readonly value='"+$('#trait').val()+"'>");
        $("y").append("<input id='"+aa+"' name='desc[]' class='form-control' type='text' readonly value='"+$('#desc').val()+"'>");
        $("z").append("<button id='btn2' data-id='"+aa+"' class='form-control'>Eliminar</button>");
        aa++;
    });
    $("z").on('click', '#btn2', function(){

        var dataId = $(this).data("id");

        $("#"+dataId).remove();
        $("#"+dataId).remove();
        $("#btn2").filter("[data-id="+dataId+"]").remove();

    });
    $( "#format" ).change(function() {
        alert( "Handler for .change() called." );
        $("#fixed-price").hide();
    });
    $( "#lot" ).change(function() {
        if(this.checked) {
            $("#lot-sel").show();
        }
        else {
            $("#lot-sel").hide();
        }


    });
    $( "#make-don" ).change(function() {
        if(this.checked) {
            $("#donation").show();
        }
        else {
            $("#donation").hide();
        }


    });
    $( "#paypal" ).change(function() {
        if(this.checked) {
            $("#paypal-email").show();
        }
        else {
            $("#paypal-email").hide();
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
    $('select[name=dom_ship]').on('change', function() {
        if(this.value == "flat") {
            $("#shipping").show();
        }
        else {
            $("#shipping").hide();
        }

    });
    $( "#free_ship" ).change(function() {
        if(this.checked) {
            $("#cost_ship").prop('disabled', true).attr({
                "value":"0"
                });

        }
        else {
            $("#cost_ship").prop('disabled', false).attr({
                "value":""
            });
        }
    });

});