<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $hidden=['created_at','updated_at','item_category'];

    public function toppings(){
        return $this->belongsToMany('App\Topping','pizza_topping','pizza_id','topping_id');
    }

    public function order(){
        return $this->belongsToMany('App\Order','order_items')->using('App\OrderItem')->withPivot(['quantity']);
    }
}
