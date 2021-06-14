<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->truncate();

        for ($i=0; $i < 30; $i++) {
            # code...
            DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => rand(100, 2000),
            'discount' => rand(1, 10) / 10,
            'discript' => Str::random(16),
            'img' => Str::random(16),
        ]);
        }

    }
}
