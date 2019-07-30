@extends('layouts.master')
@section('title','view items')
@section('content')
<div class="container">
<br>
<table class="table table-bordered">
     <thead>
             <tr>
                   <th>SL</th>
                   <th>Product Name</th>
                   <th>Brand</th>
                   <th>Quantity</th>
                   <th>Budget</th>
                   <th> Amount</th>
                   <th colspan=2><center> Actions</center></th>
                  
             </tr>
      </thead>
      <tbody>
         @foreach($items as $key=>$item) 
         <tr>
                 <td>{{++$key}}</td>
                 <td>{{$item->product_name}}</td>
                 <td>{{$item->brand}}</td>
                 <td>{{$item->quantity}}</td>
                 <td>{{$item->budget}}</td>
                 <td>{{$item->amount}}</td>
                 <td><a href="{{route('orders.edit',$item)}}" class="btn">edit</a></td>
            
            <td>
                       <form action="{{route('orders.destroy',$item)}}" method="POST"></a>
                       {{csrf_field()}}
                       <input name="_method" type="hidden" value="DELETE">
                       <button class="btn btn-danger" type="submit">Delete</button>
            </td>
         
                
        </tr>
        @endforeach
      </tbody> 
      </table>
      </div>
      @endsection 
