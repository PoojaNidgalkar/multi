<!DOCTYPE html>
<html>
<head>
<title>Multiple data send</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

</head>
<body>
<div class="container">
          <table class="table table-bordered">
             <thead>
                  <tr>
                        <th>SL</th>
                        <th>Customer Name</th>
                        <th>Order Id</th>
                 </tr>
            </thead>
            <tbody>
              @foreach($orders as $key=>$data)
              <tr>
                   <td>{{++$key}}</td>
                   <td>{{$data->customer_name}}</td>
                   <td><a href="/items/{{$data->id}}">{{$data->id}} </a> </td>
              </tr>
              @endforeach
              </tbody>   
              </table>  
              </div>



</body>
</html>