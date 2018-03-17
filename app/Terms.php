<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
  public function suppliers(){
    return $this->belongsTo('App\Suppliers');
  }
}
