<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marke;
use Faker\Generator as Faker;

$factory->define(Marke::class, function (Faker $faker) {
    return [
        'titel' => $faker->company,
    ];
});
