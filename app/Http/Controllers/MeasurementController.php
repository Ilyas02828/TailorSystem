<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\Shalwar_qamees;
use App\Waskat;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class MeasurementController extends Controller
{
    
  
    public function edit($id)
    {

   // dd("yuuuuuuuuuuuuy");
    	$measurement = Shalwar_qamees::where('order_id', $id)->first();
     
    	return view('measurement/shalwar_qamees')->with('measurement', $measurement);
    }
    public function update(Request $request, $id)
    {
    	$measurement = Shalwar_qamees::find($id);
        $measurement->update(Input::all());
        // dd("yiuyiy");
        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return view('measurement/shalwar_style')->with('measurement', $measurement);
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('orders/create');
        }
    }



}
