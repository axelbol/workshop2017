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
                required: true
            },
            productdescription:{
                required: true
            }

        }
    })
});