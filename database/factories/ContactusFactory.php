<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contactus;
use Faker\Generator as Faker;

//假資料工廠
$factory->define(Contactus::class, function (Faker $faker) {
    return [
        //後面是逗號
        'name' => $faker ->name,
        'email' => $faker ->email,
        'phone' => $faker ->phoneNumber,
        'content' => $faker ->realText(30)
    ];
});


