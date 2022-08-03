<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="../libs/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Product</h2>
                    </div>
                    @foreach ($data as $prt)
                        
                    @endforeach
                    <form method="get" action="update-product" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Product ID</label>
                            <input type="text" name="productid" class="form-control"
                             value="{{$prt['productid']}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="productname" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="productprice" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Details</label>
                            <input type="text" name="productdetails" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 1</label>
                            <input type="file" name="productimage1" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 2</label>
                            <input type="file" name="productimage2" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Image 3</label>
                            <input type="file" name="productimage3" class="form-control" />                            
                        </div>
                        <div class="form-group">
                            <label>Producer</label>
                            <input type="number" name="producerid" class="form-control" />                            
                        </div>
                        
                        <input type="submit" name="addbtn" class="btn btn-primary" value="Submit">
                        <a href="{{url('list')}}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>