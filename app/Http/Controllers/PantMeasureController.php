<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\Shalwar_qamees;
use App\Waskat;
use App\Coat;
use App\Pant;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class PantMeasureController extends Controller
{
   
       public function shalwar_qamees()
    {
         return view('measurement/shalwar_qamees');
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
   




          public function edit($id)
    {

    // dd("yuuuuuuuuuuuuy");
        $measurement = Pant::where('order_id', $id)->first();
     // dd("$measurement");
        return view('measurement/paint')->with(['measurement'=> $measurement]);
    }              
    public function update(Request $request, $id)
    {
        // dd("yuuuuuuuuuuuuy");
        // dd("yuuuuuuuuuuuuy");
        $measurement = Pant::find($id);

        $measurement->update(Input::all());

        if($measurement->save())
        {
            Session::flash('notice','Measurement was successfully updated');
            return redirect('pant');
        }
        else
        {
            Session::flash('alert','Measurement was not successfully updated');
            return redirect('pant/create');
        }
    }

}
