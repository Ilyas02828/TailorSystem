<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coat extends Model
{
	protected $fillable = [
        'order_id','lambai', 'tera', 'chati', 'kamar', 'hip', 'koler', 'button', 'chek','asteen',
        'other_measurements'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


