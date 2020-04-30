<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    public function pizzas(){
        return $this->belongsToMany('App\Item','pizza_topping','topping_id','pizza_id');
    }
}
