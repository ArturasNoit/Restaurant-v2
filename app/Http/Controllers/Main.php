<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    public function dishes()
    {
      return $this->hasMany('App\Dish');
    }
}
