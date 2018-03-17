<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size_Types extends Model
{
  //Specs
  public function specs(){
    return $this->belongsTo('App\Specs');
  }
}
