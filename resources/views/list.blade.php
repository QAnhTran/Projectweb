<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Products</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>All Available Products</h2>
                <div style="margin-right: 10%">
                    <a href="{{url('add-product')}}" class="btn btn-primary">Add more</a>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name of Product</th>
                        <th>Price(USD)</th>
                        <th>Description</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Producer ID</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $prt)
                        <tr>
                            <td>{{$prt['productID']}}</td>
                            <td>{{$prt['productName']}}</td>
                            <td>{{$prt['productPrice']}}</td>
                            <td>{{$prt['productDetails']}}</td>
                            <td><img src="images/{{$prt['productImage1']}}" width="100px" height="100px"></td>
                            <td><img src="images/{{$prt['productImage2']}}"></td>
                            <td><img src="images/{{$prt['productImage3']}}"></td>
                            <td>{{$prt['producerID']}}</td>
                            <td><input type="submit" name="addbtn" class="btn btn-default" value="Edit"> | 
                                <input type="submit" name="addbtn" class="btn btn-default" value="Delete"></td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>