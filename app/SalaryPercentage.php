<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryPercentage extends Model
{
	protected $fillable = [
        'staff_id', 'salary_date', 'from_date', 'to_date'
    ];

    public function staff(){
        return $this->belongsTo('App\Staff');
    }
}
