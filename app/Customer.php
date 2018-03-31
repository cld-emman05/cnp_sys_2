<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $guarded = [];

  public function industry(){
    return $this->belongsTo('App\Industry', 'industry_id');
  }

  public function agent(){
    return $this->belongsTo('App\Agent', 'agent_id');
  }

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }

  public function order(){
    return $this->hasMany('App\Order');
  }
}
