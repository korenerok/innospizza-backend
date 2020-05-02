<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;


class OrderController extends Controller
{
    public function create(Request $request){
        $items=$request->input('items');
        $details=$request->input();
        $order= new Order;
        $order->address=$details['address'];
        $order->contact_phone=$details['phone'];
        $order->contact_name=$details['name'];
        $order->price=$details['price'];
        $order->save();
        foreach($items as $order_item){
            $item= Item::find($order_item['id']);
            $item->order()->attach($order->id,['quantity'=>$order_item['quantity']]);
        }
        return json_encode($order->id);
    }
}
