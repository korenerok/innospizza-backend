<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function toppings(){
        return $this->belongsToMany('App\Topping','pizza_topping','pizza_id','topping_id');
    }

    public function order(){
        return $this->belongsToMany('App\Order')->using('App\OrderItem');
    }
}
