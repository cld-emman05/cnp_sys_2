<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_Materials extends Model
{
    //specs
    public function specs(){
      return $this->belongsTo('App\Specs');
    }

    //Suppliers
    public function supplier(){
      return $this->belongsTo('App\Supplier');
    }
}
