<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
	protected $fillable = [
        'order_id','lambai', 'tera','asteen','koler', 'chati', 'hip','daman', 'pati','kaaf','asteen_design',
        'other_measurements'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


