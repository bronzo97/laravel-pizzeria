<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'pizza_name'=>'Margherita',
            'ingredients'=>'Pomodoro, mozzarella, basilico',
            'price'=>'4.50',
            'size'=>'regular',
            'nutritional_values'=>'700Kcal',
            'vegan'=>0,
        ]);
    }
}
