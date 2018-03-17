<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Order_Status extends Model
{
    //Order
    public function order(){
      return $this->belongsTo('App\Job_Orders');
    }
}
