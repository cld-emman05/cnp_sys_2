<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  public function customer(){
    return $this->hasMany('App\Customer');
  }

  public function industry(){
    return $this->hasOne('App\Industry', 'industry_id');
  }

  public function employee(){
    return $this->belongsTo('App\Employee', 'employee_id');
  }
}
