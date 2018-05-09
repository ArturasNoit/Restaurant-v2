<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
  protected $guarded = [];

  public function main()
  {
    return $this->belongsTo('App\Dish');
  }
}
