<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubscribeUsers;
use Faker\Generator as Faker;

$factory->define(SubscribeUsers::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,

    ];
});
