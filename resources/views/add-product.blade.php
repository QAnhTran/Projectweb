<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
    <form method="post" action="save-product" enctype="multipart/form-data">
        @csrf
                            <h2>Add Product</h2>
                       @if (Session::has('success'))
                           <div class="alert alert-success" role="alert">
                               {{Session::get('success')}}
                           </div>
                       @endif
                       
                        <p>Please fill this form and submit to add product record in the database.</p>
                     
                            <div class="form-group">
                                <label>Product ID</label>
                                <input type="text" name="productid" class="form-control" />                            
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
        </div>
    </div>
</body>
</html>