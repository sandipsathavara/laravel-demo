$("#frmProduct").validate({
    // Specify the validation rules
    rules: {
        name: "required",
        quantity: {
            required: true,
            number: true
        },
        price: {
            required: true,
            digits: 5
        }
    },

    // Specify the validation error messages
    messages: {
        name: "Please enter product name",
        quantity: {
            required: "Please enter product quantity",
            number: "Please valide quantity"
        },
        price: {
            required: "Please enter product price",
            digits: "Please valide product price"
        }
    }
});


var product_table = $('#product_table').DataTable({
    "ajax": {
        "url": get_product_url,
        "dataSrc": function (json) {
            return json.data;
        }
    },
    "columns": [
        {"data": "name"},
        {"data": "quantity"},
        {"data": "price"},
        {"data": "date"}
    ]
});

$("#frmProduct").submit(function () {
    $.ajax({
        method: "POST",
        url: create_product_url,
        data: $("#frmProduct").serialize()
    }).done(function (msg) {
        product_table.ajax.reload();
    });

    return false;
});




