<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
  public function order(){
    $this->hasMany('App\Order', 'order_id');
  }

  public function supplier(){
    $this->hasMany('App\Supplier', 'supplier_id');
  }
}
