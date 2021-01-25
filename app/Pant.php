<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{
	protected $fillable = [
        'order_id','lambai','kamar', 'hip', 'thai', 'pancha'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


