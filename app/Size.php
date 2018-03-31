<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  public function specifications(){
    return $this->belongsTo('App\Specifications');
  }
}
