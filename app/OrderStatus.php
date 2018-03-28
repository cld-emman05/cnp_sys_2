<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
  protected $guarded = [];
  
    public function order(){
      $this->belongsTo('App\Order');
    }

    public function phase(){
      $this->hasMany('App\Phase');
    }
}
