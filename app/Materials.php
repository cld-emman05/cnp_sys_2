<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
  public function suppliers(){
    return $this->belongsTo('App\Suppliers');
  }
}
