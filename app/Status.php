<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  public function quotation_status(){
    $this->belongsTo('App\QuotationStatus');
  }
}
