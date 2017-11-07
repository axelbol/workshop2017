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

});