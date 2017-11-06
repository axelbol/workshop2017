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

        $("x").append("<input id='spec"+aa+"'  name='feature[]' class='form-control' type='text' readonly value='"+$('#trait').val()+"'>");
        $("y").append("<input id='spec"+aa+"' name='desc[]' class='form-control' type='text' readonly value='"+$('#desc').val()+"'>");
        $("z").append("");
        aa++;
    });


});