<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prize;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Prize::class, function (Faker $faker) {
    $type = $faker->randomElement([
        Prize::TYPE_MONEY,
        Prize::TYPE_COINS,
        Prize::TYPE_STUFF
    ]);
    $amount = Prize::TYPE_STUFF == $type
        ? 1
        : $faker->randomFloat(2, 0.01, 10);

    return [
        'type' => $type,
        'title' => $faker->title,
        'description' => $faker->text(50),
        'amount' => $amount
    ];
});
