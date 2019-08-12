<?php

use App\TwittAdd;
use Faker\Generator as Faker;

$factory->define(TwittAdd::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'text' => $faker->sentence(3)
    ];
});
