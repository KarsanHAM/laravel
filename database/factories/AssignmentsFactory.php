<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'weight' => $faker->numberBetween('0','100'),
        'grade' => $faker->randomFloat('1', '1', '10')
    ];
});
