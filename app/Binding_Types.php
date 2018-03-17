<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binding_Types extends Model
{
  //Specs
  public function specs(){
    return $this->belongsTo('App\Specs');
  }
}
