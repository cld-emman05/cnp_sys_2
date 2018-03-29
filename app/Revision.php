<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
  public $timestamps = true;
  
  public function file(){
    $this->belongsTo('App\File');
  }
}
