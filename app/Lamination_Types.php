<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamination_Types extends Model
{
    //Specs
    public function specs(){
      return $this->belongsTo('App\Specs');
    }
}
