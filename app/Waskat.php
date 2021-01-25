<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waskat extends Model
{
	protected $fillable = [
        'order_id','lambai', 'tera', 'chati', 'kamar', 'hip', 'koler', 'galla_type', 'other_details'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


