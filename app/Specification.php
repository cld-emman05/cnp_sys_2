<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
  public function order(){
    return $this->belongsTo('App\Order');
  }

  public function coverPaper(){
    return $this->hasOne('App\CoverPaper', 'cover_paper_id');
  }

  public function insidePaper(){
    return $this->hasOne('App\InsidePaper', 'inside_paper_id');
  }

  public function coverColor(){
    return $this->hasOne('App\Color', 'cover_color_id');
    }

  public function insideColor(){
    return $this->hasOne('App\Color', 'inside_color_id');
  }

  public function lamination(){
    return $this->hasOne('App\Lamination', 'lamination_id');
  }

  public function binding(){
    return $this->hasOne('App\BindingType', 'binding_id');
  }
}
