<!DOCTYPE html>
<html>
<head>
    <title>Products Management</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="row top-buffer center">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">Add Product</div>
            <div class="panel-body">
                {!! Form::open(['url' => route('product.store') , 'name' => 'frmProduct', 'id' => 'frmProduct']) !!}
                <div class="form-group">
                    <label for="name" class="control-label">Product name</label>
                    {{Form::text('name',null,['placeholder'=> "Product Name" , 'id' => 'name' , 'class' => 'form-control required'])}}
                </div>

                <div class="form-group">
                    <label for="quantity" class="control-label">Quantity in stock</label>
                    {{Form::text('quantity',null,['placeholder'=> "Quantity in stock" , 'id' => 'quantity' , 'class' => 'form-control required'])}}
                </div>

                <div class="form-group">
                    <label for="price" class="control-label">Price per item</label>
                    {{Form::text('price',null,['placeholder'=> "Price per item" , 'id' => 'price' , 'class' => 'form-control required'])}}

                </div>
                <button class="btn btn-default" type="submit">Create Product</button>
                {!! Form::close() !!}

            </div>
        </div>


    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">Product List</div>
            <div class="panel-body">
                <table id="product_table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total Price : </td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script>
    var create_product_url = '{{route('product.store')}}';
    var get_product_url = '{{route('product.index')}}';
</script>
<script src="{{asset('js/main.js')}}" type="application/javascript"></script>
</body>


</html>
