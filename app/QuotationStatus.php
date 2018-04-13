<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationStatus extends Model
{
  protected $guarded = [];

  public $timestamps = true;

  public function quotations(){
    return $this->belongsTo('App\Quotation', 'quotation_id');
  }

  public function status(){
    return $this->belongsTo('App\Status');
  }
}
