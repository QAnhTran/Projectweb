<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Producers</title>
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
    <form method="post" action="save-producer" enctype="multipart/form-data">
        @csrf
                            <h2>Add Product</h2>
                       @if (Session::has('success'))
                           <div class="alert alert-success" role="alert">
                               {{Session::get('success')}}
                           </div>
                       @endif
                       
                        <p>Please fill this form and submit to add product record in the database.</p>
                     
                            <div class="form-group">
                                <label>Producer ID</label>
                                <input type="text" name="producerid" class="form-control" />                            
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="producername" class="form-control" />                            
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="produceraddress" class="form-control" />                            
                            </div>
                            <div class="form-group">
                                <label>Country of Origin</label>
                                <input type="text" name="producercountry" class="form-control" />                            
                            </div>
                            
                            
                            <input type="submit" name="addbtn" class="btn btn-primary" value="Submit">
                            <a href="{{url('prrlist')}}" class="btn btn-default">Cancel</a>
                        
                   
    </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</body>
</html>