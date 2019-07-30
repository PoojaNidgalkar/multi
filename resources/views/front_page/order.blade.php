
<h1>Client</h1>
 

 <form method="post" action="{{ route('clients.store')}}" accept-charset="UTF-8">
   <div class="col-md-12">
       <div class="form-area">
       <div class="alert alert-success hide"></div>
       
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
       <div class="alert alert-danger hide"></div>
       
       
       <div class="form-group">
         <input type="text" class="form-control" name="name" placeholder="Name"/>
       </div>
       <br>
       
       <div class="form-group">
       <input type="text" class="form-control" name="address" 
         placeholder="Address"/>
       </div>
       <br>
       
     <div class="form-group">
        <input type="" class="form-control" name="contact" 
          placeholder="Contact">
     </textarea>               
       </div>
       
       <br>
       <button type="submit" class="btn btn-primary pull-right">
           Submit Clients</button>
 
       </div>
     </div>
  </form>