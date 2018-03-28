<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
  protected $guarded = [];
  
  public function agent(){
    $this->hasMany('App\Agent');
  }

  public function customer(){
    $this->hasMany('App\Customer');
  }
}
