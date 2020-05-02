<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index(){
        $pizzas=Item::where('item_category','pizza')->inRandomOrder()->get();
        $other_items=Item::where('item_category','misc')->inRandomOrder()->get();
        $items=['pizzas'=>$pizzas,'misc'=>$other_items];
        return json_encode($items);
    }
}
