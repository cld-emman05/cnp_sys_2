<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
  public function order(){
    $this->belongsTo('App\Order');
  }

  public function binding(){
    $this->hasOne('App\BindingType', binding_id);
  }

  public function coverPaper(){
    $this->hasOne('App\CoverPaper', cover_paper_id);
  }

  public function insidePaper(){
    $this->hasOne('App\InsidePaper', inside_paper_id);
  }

  public function color(){
    $this->hasOne('App\Color' cover_color_id);
    $this->hasOne('App\Color' inside_color_id);
  }

  public function lamination(){
    $this->hasOne('App\Lamination', lamination_id);
  }

  public function binding(){
    $this->hasOne('App\Binding', binding_id);
  }
}
