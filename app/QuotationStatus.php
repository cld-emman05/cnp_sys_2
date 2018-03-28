<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationStatus extends Model
{
  protected $guarded = [];
  
  public function quotations(){
    $this->belongsTo('App\Quotation');
  }

  public function status(){
    $this->hasOne('App\Status');
  }
}
