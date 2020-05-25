<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoe;
use Faker\Generator as Faker;

$factory->define(Shoe::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'year' => $faker->year,
        'color' => $faker->colorName,
        'size' => $faker->numberBetween(30,50),
        'brand_id' => App\Brand::all()->random(),
    ];
});
