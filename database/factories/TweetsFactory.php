<?php
<<<<<<< HEAD

use App\TwittAdd;
=======
//delete it
/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Twitt_add;
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
use Faker\Generator as Faker;

$factory->define(TwittAdd::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'text' => $faker->sentence(3)
    ];
});
