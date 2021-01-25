<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\Shalwar_qamees;
use App\Shalwar_qamees_design;
use App\Waskat;
use App\Order;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class StyleController extends Controller
{
   
       public function index()
    {
    
         return view('measurement/shalwar_style');
    }
       public function waskat()
    {
         return view('measurement/waskat');
    }
       public function coat()
    {
         return view('measurement/coat');
    }
       public function paint()
    {
         return view('measurement/paint');
    }
       public function shirt()
    {
         return view('measurement/shirt');
    }
   


    public function store(Request
$request)
    {
      // dd($request);
      // $measurement = shalwar_qamees::where('order_id', $id)->first();
         $order = new Shalwar_qamees_design(Input::all());
         $orderid=$order->order_id;
        //  dd($orderid);
         $order->save();
      return redirect('orders/'.$orderid);
    }
// ->with('order',$order)->with('$order->id')

    public function store_shalwar_qamees(Request
$request)
    {
    	// $measurement = shalwar_qamees::where('order_id', $id)->first();
         $order = new Shalwar_qamees(Input::all());
         // dd($order);
         $order->save();
    	return view('measurement/shalwar_style');
    }
    public function update11(Request $request, $id)
    {
    	$measurement = Sha::find($id);
        $measurement->update(Input::all());

        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return redirect('orders');
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('orders/create');
        }
    }




          public function edit($id)
    {

    // dd("yuuuuuuuuuuuuy");
        $measurement = Shalwar_qamees_design::where('order_id', $id)->first();
     
        return view('measurement/styleedit')->with('measurement', $measurement);
    }
    
    
    public function update(Request $request, $id)
    {
          //dd($id);
          
        $measurement = Shalwar_qamees_design::find($id);
        $varrr=$request->input('order_id');
       // dd($varrr);
        
        $measurement->update(Input::all());
        
        
        

        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return redirect('orders/'.$varrr);
            
           // http://demo.lashandnailboutique.com/orders/$varrr;
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('orders');
        }
    }

}
