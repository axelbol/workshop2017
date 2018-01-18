$().ready(function () {
    $("#ProductForm").validate({
        rules: {
            title: {
                required: true
            },
            subtitle:{
                required: true
            },
            category:{
                required: true
            },
            isbn:{
                required: true
            },
            condition:{
                required: true
            },
            conditiondescription:{
                required: check()
            },
            productdescription:{
                required: true
            },
            format:{
                required: true
            },
            duration:{
                required: true
            },
            ad:{
                required: true
            },
            buynowprice:{
                required: true
            },



            return:{
                required: true
            },

        },
    })

    function check () {
        if ($("#condition").val() == "Para estrenar") {
            alert("se selecciono");
            return false;
        }
        else {
            return true;
        }
    }
    function checkFormat () {
        if ($("#format").val() == "Precio fijo") {
            return true;
        }

        if ($("#format").val() == "Subasta") {
            return true;
        }
    }
});