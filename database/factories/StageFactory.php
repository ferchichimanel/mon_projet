<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stage;
use Faker\Generator as Faker;

$factory->define(stage::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
        'date_debut' => $faker->dateTime($max = 'now', $timezone = null),
        'date_fin'=> $faker->dateTime($max = 'now', $timezone = null),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
