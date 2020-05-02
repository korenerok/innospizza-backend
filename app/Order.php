<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items(){
        return $this->belongsToMany('App\Item','order_items')->using('App\OrderItem');
    }

   /* public function customer(){
        return $this->belongsTo('App\User');
    }
    */
}
