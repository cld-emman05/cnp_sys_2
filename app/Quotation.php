<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  protected $guarded = [];

  public function quotation_statuses(){
    return $this->hasMany('App\Quotation_Status');
  }

  public function orders(){
    return $this->belongsTo('App\Orders', 'order_id');
  }
}
