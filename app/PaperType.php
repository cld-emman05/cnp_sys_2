<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
  protected $guarded = [];
  
  public function inside_paper(){
    $this->hasMany('App\InsidePaper');
  }

  public function cover_paper(){
    $this->hasMany('App\CoverPaper');
  }

  public function material(){
    $this->belongsTo('App\Material');
  }
}
