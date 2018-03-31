<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  public function quotation_status(){
    return $this->belongsTo('App\QuotationStatus');
  }
}
