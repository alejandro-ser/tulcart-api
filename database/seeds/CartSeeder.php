<?php

use Illuminate\Database\Seeder;
use App\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cart::class, 10)->create();
    }
}
