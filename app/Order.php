<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $guarded = [];

  public function specification(){
    return $this->hasOne('App\Specification', 'specification_id');
  }

  public function customer(){
    return $this->belongsTo('App\Customer', 'customer_id');
  }

  public function file(){
  return $this->hasOne('App\File', 'file_id');
  }

  public function quotation(){
    return $this->hasMany('App\Quotation');
  }

  public function raw_material(){
    return $this->hasMany('App\RawMaterial');
  }

  public function order_status(){
    return $this->hasMany('App\OrderStatus');
  }
}
