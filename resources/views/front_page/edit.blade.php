<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<hr>
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clients') }}">View All Clients</a></li>
        <li><a href="{{ URL::to('clients/create') }}">Create a client</a>
    </ul>
</nav>

<h1>Edit: CLIENT NAME- {{ $client->Cid }}</h1>

<div class="container">
  <form method="POST" action="{{route('clients.update', $client)}}">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">

       <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" placeholder="name" 
        name="name" value={{$client->name}}>
      </div>
    </div>

    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
      <div class="col-sm-10">
        <textarea name="address" rows="8" cols="80">{{$client->address}}</textarea>
      </div>
    </div>

    <div class="form-group row">
    <label for="contact" class="col-sm-2 col-form-label col-form-label-lg">Contact</label>
      <div class="col-sm-10">
        <input type="text" placeholder="contact" 
        name="contact" value={{$client->contact}}>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
</body>
</html>