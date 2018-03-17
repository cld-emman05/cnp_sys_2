<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  //Order
  public function order(){
    return $this->belongsTo('App\Job_Orders');
  }

  public function quotation_status(){
    return this->hasMany('App\Quotation_Status');
  }
}
