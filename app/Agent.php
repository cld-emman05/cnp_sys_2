<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{  
  public function customer(){
    $this->hasMany('App\Customer', customer_id);
  }

  public function industry(){
    $this->hasMany('App\Industry', industry_id);
  }

  public function employee(){
    $this->belongsTo('App\Employee', employee_id);
  }
}
