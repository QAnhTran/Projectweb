<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="../libs/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Product</h2>
                    </div>
                    
                        
                   
                    <form method="post" action="{{url('update-product')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product ID</label>
                            <input type="text" name="productid" class="form-control"
                             value="{{$data->productID}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="productname" class="form-control"
                            value="{{$data->productName}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="productprice" class="form-control"
                            value="{{$data->productPrice}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Details</label>
                            <input type="text" name="productdetails" class="form-control"
                            value="{{$data->productDetails}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 1</label>
                            <input type="file" name="productimage1" class="form-control"
                            value="{{$data->productImage1}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 2</label>
                            <input type="file" name="productimage2" class="form-control"
                            value="{{$data->productImage2}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 3</label>
                            <input type="file" name="productimage3" class="form-control"
                            value="{{$data->productImage3}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Producer</label>
                            <select name="producerid" class=form-control value="{{$data->producerID}}" >
                                @foreach ($prcdata as $prc)
                                <option value="{{$prc->producerID}}">{{$prc->producerID}}</option>
                                @endforeach
                            </select>                               
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="{{url('list')}}" class="btn btn-default">Cancel</a>
                      
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>