<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  protected $fillable = ['TotalAmount', 'UnitCost'];

  public function quotation_status(){
    return $this->hasMany('App\QuotationStatus');
  }

  public function order(){
    return $this->belongsTo('App\Order', 'order_id');
  }
}
