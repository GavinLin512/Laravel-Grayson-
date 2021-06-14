<?php

use App\Product;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::truncate();
        Factory(Product::class, 30) ->create();
    }
}
