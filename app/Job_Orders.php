<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Orders extends Model
{
  public function type(){
    return $this->hasOne('App\Job_Type', 'job_type_id');
  }

  public function file(){
    return $this->hasOne('App\File_Name', 'file_id');
  }

  public function customer(){
    return $this->belongsTo('App\Order');
  }

  public function quotation(){
    return $this->hasMany('App\Quotation', quotation_id);
  }
}
