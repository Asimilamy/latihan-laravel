<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->text(),
        'status' => $faker->numberBetween(0, 1)
    ];
});
