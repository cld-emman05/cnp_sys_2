<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
  public function order(){
    return $this->hasMany('App\Order');
  }

  public function coverPaper(){
    return $this->belongsTo('App\CoverPaper', 'cover_paper_id');
  }

  public function size(){
    return $this->belongsTo('App\Size', 'size_id');
  }

  public function insidePaper(){
    return $this->belongsTo('App\InsidePaper', 'inside_paper_id');
  }

  public function coverColor(){
    return $this->belongsTo('App\Color', 'cover_color_id');
    }

  public function insideColor(){
    return $this->belongsTo('App\Color', 'inside_color_id');
  }

  public function lamination(){
    return $this->belongsTo('App\LaminationType', 'lamination_id');
  }

  public function binding(){
    return $this->belongsTo('App\BindingType', 'binding_id');
  }
}
