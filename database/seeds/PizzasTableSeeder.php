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
        //
        $newPizza = new Pizza();
        $newPizza->name = 'margherita';
        $newPizza->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nemo quis nobis expedita laboriosam doloremque! Reiciendis at provident, eos corrupti fugiat dignissimos quia, incidunt odit, quis mollitia enim tenetur temporibus?';
        $newPizza->price = 100.50;

        $newPizza->save();
    }
}


