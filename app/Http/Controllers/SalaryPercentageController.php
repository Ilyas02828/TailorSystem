<?php

namespace App\Http\Controllers;

use App\Salary;
use App\Staff;
use App\Order;
use App\SalaryPercentage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use DB;
use Corbon\Corbon;

class SalaryPercentageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salary::all();
        return view('salarypercentage/index')->with('salaries', $salaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::where('staff_delete','0')->pluck('staff_name','id');
        $order = Order::where('order_delete','0')->pluck('no_suite','staff_id');
        return view('salarypercentage/create')->with('staff', $staff)->with('order', $order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        // dd($request);
        $from_date=$request->input('from_date');
        $intfrom_date=(strtotime($from_date));
        $to_date=$request->input('to_date');
        $intto_date=(strtotime($to_date));
         
         

$net=$intfrom_date-$intto_date;
// dd($net);
        $staff_id=$request->input('staff_id');

         $order = Order::where('staff_id',$staff_id)->get();
        //  $intcreate=$order->order_amount;

// dd($order);
$order_amount =Order::where('created_at', '<=', $to_date)
        ->where('created_at', '>=', $from_date)->where('staff_id',$staff_id)
        ->get();
        // dd($order_amount);
        
  $balance = ($order_amount)->sum('order_amount');     
  
//   dd($balance);
//   $order_amount=collect($order)->sum('order_amount');
// dd($order_amount);

        
        
// $order_amount="SELECT  SUM($order_amount) FROM orders WHERE staff_id = $staff_id";

// $result = DB::select($order_amount,['staff_id'=>$staff_id]);
        
//         $sum=$result[];
//         dd($sum);

        

         $user=Staff::where('id',$staff_id)->first();
        
          
        return view('salarypercentage/salaryissue',compact('intfrom_date','intto_date','order','user','from_date','to_date','sum'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salary = Salary::find($id);
        return view('salarypercentage/show')->with('salary',$salary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
