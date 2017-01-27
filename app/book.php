<?php
namespace App;

class Book Extends Eloquent{
  public $timestamps = false;

  public function category(){
    return $this->belongsTo('Category');
  }
}
