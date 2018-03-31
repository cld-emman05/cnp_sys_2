<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  public $timestamps = true;

  public function term(){
    return $this->hasOne('App\Term', 'term_id');
  }

  public function material(){
    return $this->hasMany('App\Material', 'material_id');
  }

  public function payment(){
    return $this->hasMany('App\Payment', 'payment_id');
  }

  public function raw_material(){
    return $this->hasMany('App\RawMaterial');
  }
}
