<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\Shalwar_qamees;
use App\Shalwar_qamees_design;
use App\Waskat;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class MeasurController extends Controller
{
   
       public function shalwar_style()
    {
      dd("uyiyi");
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
   


//     public function shalwar_design(Request
// $request  $id)
//     {
//       // dd($request);
//        $measurement = shalwar_qamees::where('order_id', $id)->first();
//          $order = new Shalwar_qamees_design(Input::all());
//          // dd($order);
//          $order->save();
//       return view('orders');
//     }


//     public function store_shalwar_qamees(Request
// $request)
//     {
//     	// $measurement = shalwar_qamees::where('order_id', $id)->first();
//          $order = new Shalwar_qamees(Input::all());
//          // dd($order);
//          $order->save();
//     	return view('measurement/shalwar_style');
//     }
//     public function update11(Request $request, $id)
//     {
//     	$measurement = Sha::find($id);
//         $measurement->update(Input::all());

//         if($measurement->save())
//         {
//             Session::flash('notice','Measurement was successfully updated');
//             return redirect('orders');
//         }
//         else
//         {
//             Session::flash('alert','Measurement was not successfully updated');
//             return redirect('orders/create');
//         }
//     }




          public function edit($id)
    {

    // dd("yuuuuuuuuuuuuy");
        $measurement = Waskat::where('order_id', $id)->first();
     
        return view('measurement/waskat')->with('measurement', $measurement);
    }
    public function update(Request $request, $id)
    {
        // dd("yuuuuuuuuuuuuy");
        $measurement = Waskat::find($id);
        $measurement->update(Input::all());

        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return redirect('waskat');
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('waskat/create');
        }
    }

}
