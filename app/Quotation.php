<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  protected $fillable = ['TotalAmount', 'UnitCost'];

  public function quotation_status(){
    return $this->hasMany('App\Quotation_Status');
  }

  public function order(){
    return $this->belongsTo('App\Orders', 'order_id');
  }
}
