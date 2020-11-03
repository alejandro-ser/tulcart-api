<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words($nb = 3, $asText = true),
        'sku' => $faker->bothify('???-###'),
        'description' => $faker->text($maxNbChars = 50),
        'created_at' => $faker->date('Y-m-d H:i:s'),
    ];
});
