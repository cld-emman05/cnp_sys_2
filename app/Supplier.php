<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  public function term(){
    $this->hasOne('App\Term');
  }

  public function material(){
    $this->hasMany('App\Material');
  }

  public function payment(){
    $this->hasMany('App\Payment');
  }

  public function raw_material(){
    $this->hasMany('App\RawMaterial');
  }
}
