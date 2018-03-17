<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_Name extends Model
{
  //Order
  public function order(){
    return $this->belongsTo('App\Job_Orders');
  }
}
