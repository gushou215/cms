<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'nickname'=>$faker->name,
        'remember_token' => str_random(10)
    ];
});
