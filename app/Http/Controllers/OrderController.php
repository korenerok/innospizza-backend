<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use Illuminate\Support\Facades\Auth; 

class OrderController extends Controller
{
    public $successStatus=200;

    public function create(Request $request){
        $items=$request->input('items');
        $details=$request->input();
        $user=Auth::guard('api')->user();
        $order= new Order;
        $order->address=$details['address'];
        $order->contact_phone=$details['phone'];
        $order->contact_name=$details['name'];
        $order->price=$details['price'];
        if($user){
            $order->customer()->associate($user);
        }
        $order->save();
        foreach($items as $order_item){
            $item= Item::find($order_item['id']);
            $item->order()->attach($order->id,['quantity'=>$order_item['quantity']]);
        }
        return json_encode($order->id);
    }

    public function list(Request $request){
        $user=Auth::user();
        $orders=Order::with(['items'])->where('user_id',$user->id)->get();
        return response()->json(['orders'=>$orders],$this->successStatus);
    }

}
