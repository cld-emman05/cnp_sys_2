<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper_Type extends Model
{
  public function inside(){
    return $this->belongsTo('App\Inside_Specs');
  }

  public function cover(){
    return $this->belongsTo('App\Cover_Specs');
  }
}
