<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  protected $guarded = [];

  public function quotation_statuses(){
    $this->hasMany('App\Quotation_Status');
  }

  public function orders(){
    $this->belongsTo('App\Orders', 'order_id');
  }
}
