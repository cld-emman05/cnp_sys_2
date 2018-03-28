<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
  public function order(){
    $this->belongsTo('App\Order');
  }

  public function supplier(){
    $this->hasMany('App\Supplier');
  }
}
