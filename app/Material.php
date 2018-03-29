<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $guarded = [];

  public function supplier(){
    $this->belongsTo('App\Supplier');
  }

  public function paper_type(){
    $this->hasMany('App\Paper_Type', 'paper_type_id');
  }
}
