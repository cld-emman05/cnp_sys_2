<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
  public function order(){
    return $this->hasMany('App\Order', 'order_id');
  }

  public function supplier(){
    return $this->hasMany('App\Supplier', 'supplier_id');
  }
}
