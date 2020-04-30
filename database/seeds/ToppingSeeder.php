<?php

use Illuminate\Database\Seeder;
use App\Topping;


class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toppings=[
            ['name'=>'pepperonni'],
            ['name'=>'eggplant'],
            ['name'=>'sausage'],
            ['name'=>'goat cheese'],
            ['name'=>'olives'],
            ['name'=>'anchovies'],
            ['name'=>'cheddar cheese'],
            ['name'=>'zuchinni'],
            ['name'=>'pulled pork'],
            ['name'=>'pineapple'],
            ['name'=>'mozarella cheese'],
            ['name'=>'hot peppers'],
            ['name'=>'ham'],

        ];
        Topping::insert($toppings);
    }
}
