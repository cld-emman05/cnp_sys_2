<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $guarded = [];
  
  public function order(){
    $this->belongsTo('App\Order');
  }

  public function revision(){
    $this->hasMany('App\Revision');
  }
}
