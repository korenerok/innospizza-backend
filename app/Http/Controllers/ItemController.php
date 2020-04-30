<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index(){
        $pizzas=Item::where('is_pizza',true)->inRandomOrder()->get()->toJson();
        $other_items=Item::where('is_pizza',false)->inRandomOrder()->get()->toJson();
        $items=['pizzas'=>$pizzas,'misc'=>$other_items];
        return $pizzas;
    }
}
