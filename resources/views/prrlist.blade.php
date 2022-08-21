<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Producers</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>All Available Producers</h2>
                <div style="margin-right: 10%">
                    <a href="{{url('add-producer')}}" class="btn btn-primary">Add more</a>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Producer ID</th>
                        <th>Name of Producer</th>
                        <th>Address</th>
                        <th>Country of Origin</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($prrdata as $prr)
                        <tr>
                           
                            <td>{{$prr['producerID']}}</td>
                            <td>{{$prr['producerName']}}</td>
                            <td>{{$prr['producerAddress']}}</td>
                            <td>{{$prr['producerCountry']}}</td>
                            <td><a href="{{url('updateprr/'.$prr->producerID)}}" class="btn btn-primary"> Edit </a> | 
                                <a href="{{url('deleteprr/'.$prr->producerID)}}" class="btn btn-primary"> Delete </a></td>
                         
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>