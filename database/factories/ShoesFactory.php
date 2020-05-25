<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoes;
use Faker\Generator as Faker;

$factory->define(Shoes::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'year' => $faker->year,
        'color' => $faker->colorName,
        'size' => $faker->numberBetween(30,50),
        'brands_id' => App\Marke::all()->random(),
    ];
});
