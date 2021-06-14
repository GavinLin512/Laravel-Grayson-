<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Factory;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    $faker = Factory::create('zh_TW');
    return [
        //
        'name' => $faker->company,
        'price' => $faker->numberBetween(1, 10000),
        'discount' => $faker->randomDigitNotZero() / 10,
        'discript' => $faker->paragraph(4, true),
        'img' => $faker->imageUrl(640, 480, 'food')
    ];
});
