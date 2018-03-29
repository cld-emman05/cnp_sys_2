<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  public $timestamps = true;

  public function term(){
    $this->hasOne('App\Term', 'term_id');
  }

  public function material(){
    $this->hasMany('App\Material', 'material_id');
  }

  public function payment(){
    $this->hasMany('App\Payment', 'payment_id');
  }

  public function raw_material(){
    $this->hasMany('App\RawMaterial');
  }
}
