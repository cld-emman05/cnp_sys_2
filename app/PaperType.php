<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
  protected $guarded = [];

  public function inside_paper(){
    return $this->hasMany('App\InsidePaper');
  }

  public function cover_paper(){
    return $this->hasMany('App\CoverPaper');
  }

  public function material(){
    return $this->belongsTo('App\Material');
  }
}
