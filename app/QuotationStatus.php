<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationStatus extends Model
{
  protected $guarded = [];

  public $timestamps = true;

  public function quotations(){
    $this->belongsTo('App\Quotation', 'quotation_id');
  }

  public function status(){
    $this->hasOne('App\Status', 'status_id');
  }
}
