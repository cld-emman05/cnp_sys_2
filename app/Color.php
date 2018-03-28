<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  protected $guarded = [];
  
  public function specification(){
    $this->belongsTo('App\Specification');
  }
}
