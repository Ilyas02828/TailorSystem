<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shalwar_qamees extends Model
{

	protected $table='shalwar_qamees';
	protected $fillable = [
        'order_id','lambai', 'tera', 'asteen','asteen_moda', 'koler', 'chati', 'kamar', 'daman', 
        'shalwar', 's_g_s', 'pancha','down','taik','bown','leftkam'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


