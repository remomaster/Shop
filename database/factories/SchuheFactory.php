<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schuhe;
use Faker\Generator as Faker;

$factory->define(Schuhe::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'erscheinungsjahr' => $faker->year,
        'farbe' => $faker->colorName,
        'grosse' => $faker->numberBetween(30,50),
        'marke_id' => App\Marke::all()->random(),
    ];
});
