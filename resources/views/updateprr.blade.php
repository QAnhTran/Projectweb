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
                        <h2>Update Producer</h2>
                    </div>
                    
                        
                   
                    <form method="post" action="{{url('update-producer')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product ID</label>
                            <input type="text" name="producerid" class="form-control"
                             value="{{$data->producerID}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="producername" class="form-control"
                            value="{{$data->producerName}}" />                            
                        </div>
                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="produceraddress" class="form-control"
                            value="{{$data->producerAddress}}" />                            
                        </div>
                        <div class="form-group">
                            <label>Country of Origin</label>
                            <input type="text" name="producercountry" class="form-control"
                            value="{{$data->producerCountry}}" />                            
                        </div>
                      
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="{{url('prrlist')}}" class="btn btn-default">Cancel</a>
                      
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>