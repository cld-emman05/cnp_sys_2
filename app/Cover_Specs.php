<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover_Specs extends Model
{
    // Paper Color
    public function color(){
      return this->hasOne('App\Paper_Color')
    }
    // Paper type
    public function type(){
      return this->hasOne('App\Paper_Type')
    }
    // Specs
    public function specs(){
      return this->belongsTo('App\Specs')
    }
}
