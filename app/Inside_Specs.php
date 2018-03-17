<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inside_Specs extends Model
{
  // Paper Color
  public function color(){
    return this->hasOne('App\Paper_Color', 'paper_color_id')
  }
  // Paper type
  public function type(){
    return this->hasOne('App\Paper_Type', 'paper_type_id')
  }
  // Specs
  public function specs(){
    return this->belongsTo('App\Specs')
  }
}
