<?php

use App\Pizza;
use Illuminate\Database\Seeder;


class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Pizza();

        $data->pizza_name = "Margherita";
        $data->ingredients = "Pomodoro, mozzarella, basilico";
        $data->price = "4.50";
        $data->size = "Regular";
        $data->nutritional_values = "700Kcal";
        $data->vegan = 0;

        $data->save();
    }
}
