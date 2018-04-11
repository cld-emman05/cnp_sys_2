<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
  protected $fillable = ['id,TotalAmount,UnitCost'];

  public function quotation_status(){
    return $this->hasMany('App\Quotation_Status');
  }

  public function orders(){
    return $this->belongsTo('App\Orders', 'order_id');
  }
}
