<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $hidden=['updated_at','user_id'];

    public function items(){
        return $this->belongsToMany('App\Item','order_items')->using('App\OrderItem')->withPivot(['quantity']);
    }

    public function customer(){
        return $this->belongsTo('App\User','user_id');
    }
    
}
