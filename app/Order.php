<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $guarded = [];
  
  public function specification(){
    $this->hasOne('App\Specification', specification_id);
  }

  public function customer(){
    $this->belongsTo('App\Customer', customer_id);
  }

  public function file(){
    $this->hasOne('App\File', file_id);
  }

  public function quotation(){
    $this->hasMany('App\Quotation');
  }

  public function raw_material(){
    $this->hasMany('App\RawMaterial');
  }

  public function order_status(){
    $this->hasMany('App\OrderStatus');
  }
}
