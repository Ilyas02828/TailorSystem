<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shalwar_qamees_design extends Model
{
	protected $fillable = [
       'order_id','bin_ch','binstyle', 'koler','kaafsize', 'kaaflambai', 'kaaf', 'kaafother','asteensize','asteenother', 'pati','patisize',
       'frontpocketsize', 'pocketfront','pocketside','pocketshalwar', 'silayi','galla', 'daman', 'design', 'button','other_measurements'
    ];

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


