<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->words(3),
        'price' => $faker->randomFloat(2, 1, 100000),
        'cost' => $faker->randomFloat(2, 1, 100000)
    ];
});
