<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $guarded = [];

  public function supplier(){
    return $this->belongsTo('App\Suppliers');
  }
}
