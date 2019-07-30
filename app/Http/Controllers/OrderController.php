<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Items;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Orders::all();
       return view('front_page.view',compact('orders'));
    }

    public function store(Request $request)
   {
       $data=$request->all();
       $lastid=Orders::create($data)->id;
       if(count($request->product_name) > 0 )
       {
             foreach($request->product_name as $item=>$v)
             {
                  $data2=array(
                      'orders_id'=>$lastid,
                     'product_name'=>$request->product_name[$item],
                      'brand'=>$request->brand[$item],
                      'quantity'=>$request->quantity[$item],
                      'budget'=>$request->budget[$item],
                      'amount'=>$request->amount[$item]
                      
                             );
                     //dd($request->all());
                    Items::insert($data2);
            }

       }
       return redirect()->back()->with('success','data insert successfully');
    }

    public function items($id)
    {
             $items=Items::where('orders_id','=',$id)->get();
             return view('front_page.items',compact('items'));
    }

    public function edit(Client $client)
    {
        return view('editt')->with(compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
        
        $client->name = $request->name;
        $client->address= $request->address;
        $client->contact = $request->contact;
        $client->save();
        $request->session()->flash('message', 'Successfully modified the client!');
        return redirect('clients');
    }
    public function destroy($items)
    {
        $items = Items::where('id',$items);
        $items->delete();
       //dd($id);
        return redirect('/orders');
    }

    
 


}


