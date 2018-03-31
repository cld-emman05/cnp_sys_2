<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $guarded = [];

  public function order(){
    return $this->belongsTo('App\Order');
  }

  public function revision(){
    return $this->hasMany('App\Revision');
  }
}
