<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BindingType extends Model
{
  protected $guarded = [];
  
  public function specification(){
    $this->belongsTo('App\Specification');
  }
}
                                                                                                               
