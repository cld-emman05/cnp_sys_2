<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
  public function file(){
    $this->belongsTo('App\File');
  }
}
