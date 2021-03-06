<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => '1234567u',
        'key' => str_random(8),
        'remember_token' => str_random(12)
    ];
});

$factory->define(App\Item::class, function ($faker) {
    return [
        'name' => ucfirst($faker->word),
        'description' => ucfirst($faker->words(2, true)),
        'mount' => $faker->randomFloat(2, 10, 150),
        'date' => new Datetime('now'),
    ];
});

$factory->define(App\Group::class, function ($faker) {
    return [
        'name' => "Los ".ucfirst($faker->word),
    ];
});

$factory->define(App\Balance::class, function ($faker) {
    return [
        'type' => $faker->numberBetween(0,1),
        'group_id' => $faker->numberBetween(1,4),
        'item_id' => $faker->numberBetween(1,4),
    ];
});
