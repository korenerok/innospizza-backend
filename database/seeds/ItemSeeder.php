<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Topping;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas=[
            ['item_category'=>'pizza', 'name'=>'Vegan Delight','price'=>10.00],
            ['item_category'=>'pizza', 'name'=>'Say Cheese!','price'=>12.00],
            ['item_category'=>'pizza', 'name'=>'Spring Pizza','price'=>12.00],
            ['item_category'=>'pizza', 'name'=>'Hawaian Adventure','price'=>11.00],
            ['item_category'=>'pizza', 'name'=>'Full Meat','price'=>14.50],
            ['item_category'=>'pizza', 'name'=>'Pepperonni Special ','price'=>12.00],
            ['item_category'=>'pizza', 'name'=>'Spicy Drive','price'=>11.00],
            ['item_category'=>'pizza', 'name'=>'Innospizza','price'=>15.00],
            ['item_category'=>'pizza', 'name'=>'Sausage Chili Pizza','price'=>13.50],
            ['item_category'=>'pizza', 'name'=>'Classic Pie','price'=>8.50],
        ];

        $misc=[
            ['item_category'=>'misc', 'name'=>'Diet Coke','price'=>1.00],
            ['item_category'=>'misc', 'name'=>'Classic Coke','price'=>1.00],
            ['item_category'=>'misc', 'name'=>'Sprite','price'=>1.00],
            ['item_category'=>'misc', 'name'=>'Buffalo Wings Bucket','price'=>8.00],
            ['item_category'=>'misc', 'name'=>'Hot Chili','price'=>3.50],
            ['item_category'=>'misc', 'name'=>'Butter Special Sauce','price'=>2.00],
        ];

        Item::insert($pizzas);
        Item::insert($misc);

        $toppings=Topping::whereIn('name',['eggplant','olives','zuchinni'])->get();
        Item::where('name','Vegan Delight')->first()->toppings()->attach($toppings);
        $toppings=Topping::where('name','like','%cheese%')->get();
        Item::where('name','Say Cheese!')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['mozarella cheese','olives','zuchinni','pepperonni'])->get();
        Item::where('name','Spring Pizza')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['mozarella cheese','pineapple','ham'])->get();
        Item::where('name','Hawaian Adventure')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['pepperonni','sausage','ham','pulled pork'])->get();
        Item::where('name','Full Meat')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['pepperonni','mozarella cheese'])->get();
        Item::where('name','Pepperonni Special')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['pepperonni','hot peppers','ham','anchovies'])->get();
        Item::where('name','Spicy Drive')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['pepperonni','mozarella cheese','olives','goat cheese','sausage','ham','pulled pork'])->get();
        Item::where('name','Innospizza')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['sausage','hot peppers','mozarella cheese'])->get();
        Item::where('name','Sausage Chili Pizza')->first()->toppings()->attach($toppings);
        $toppings=Topping::whereIn('name',['mozarella cheese','ham'])->get();
        Item::where('name','Classic Pie')->first()->toppings()->attach($toppings);
    }
}
