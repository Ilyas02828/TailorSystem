<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
        'customer_id', 'staff_id', 'delivery_date', 'no_suite',   'order_amount', 'order_paid', 'order_details', 'order_status','ilyas','cloths'
    ];

    public function customer()
	{
	    return $this->belongsTo('App\Customer');
	}
	public function staff()
	{
	    return $this->belongsTo('App\Staff');
	}
	public function measurement()
	{
	    return $this->hasOne('App\Measurement','order_id');
	}
	public function shalwar_qamees()
	{
	    return $this->hasOne('App\Shalwar_qamees','order_id');
	}
		public function waskat()
	{
	    return $this->hasOne('App\Waskat','order_id');
	}
		public function waskats()
	{
	    return $this->hasOne('App\Waskat','order_id');
	}
		public function coat()
	{
	    return $this->hasOne('App\Coat','order_id');
	}
		public function pants()
	{
	    return $this->hasOne('App\Pant','order_id');
	}
		public function shirts()
	{
	    return $this->hasOne('App\Shirt','order_id');
	}
		public function shalwar_qamees_designs()
	{
	    return $this->hasOne('App\Shalwar_qamees_design','order_id');
	}
}
