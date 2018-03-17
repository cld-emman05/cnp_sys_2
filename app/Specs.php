<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    // Size
    public function size(){
      return $this->hasOne('App\Size', 'size_id');
    }
    //Cover
    public function cover(){
      return $this->hasOne('App\Cover_Specs', 'cover_id');
    }
    //Inside
    public function inside(){
      return $this->hasOne('App\Inside_Specs', 'inside_id');
    }
    //Lamination
    public function lamination(){
      return $this->hasOne('App\Lamination_Types', 'lamination_id');
    }
    //Binding
    public function binding(){
      return $this->hasOne('App\Binding_');
    }
    //Job type
    public function job_type(){
      return $this->belongsTo('App\Job_Type');
    }
    //Raw Materials
    public function raw_material(){
      return $this->belongsTo('App\Raw_Materials');
    }
}
