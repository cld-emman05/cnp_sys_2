<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Type extends Model
{
    public function order(){
      this->belongsTo('App\Job_Orders');
    }

    public function specs(){
      this->hasOne('App\Specs');
    }
}
