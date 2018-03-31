<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
  protected $guarded = [];

  public function order_status(){
    return $this->belongsTo('App\Order_Status');
  }
}
