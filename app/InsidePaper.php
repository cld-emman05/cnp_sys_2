<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsidePaper extends Model
{
  protected $guarded = [];

  public function specification(){
    $this->belongsTo('App\Specification');
  }

  public function paper_type(){
    $this->belongsTo('App\PaperType', 'paper_type_id');
  }
}
