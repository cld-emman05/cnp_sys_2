<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
  public $timestamps = true;

  protected $guarded = [];

    public function order(){
      $this->belongsTo('App\Order', 'order_id');
    }

    public function phase(){
      $this->hasMany('App\Phase', 'phase_id');
    }
}
