<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $guarded = [];

  public function industry(){
    $this->belongsTo('App\Industry', 'industry_id');
  }

  public function agent(){
    $this->belongsTo('App\Agent', 'agent_id');
  }

  public function user(){
    $this->belongsTo('App\User', 'user_id');
  }

  public function order(){
    $this->hasMany('App\Order');
  }
}
