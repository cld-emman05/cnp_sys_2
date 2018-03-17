<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    // Materials
    public function material(){
      return $this->hasOne('App\Material', 'material_id');
    }
    // Payments
    public function payment(){
      return $this->hasOne('App\Payment', 'payment_id');
    }
    // Terms
    public function term(){
      return $this->hasOne('App\Terms');
    }

    // Raw Materials
    public function raw_materials(){
      return $this->hasMany('App\Raw_Materials');
    }
}
