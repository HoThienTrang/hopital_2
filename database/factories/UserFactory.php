<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\Price::class, function (Faker $faker) {
    return [
        'price' => rand(10000, 1000000),
    ];
});

$factory->define(App\Models\Product::class, function (Faker $faker) {
    static $userIds;
    static $categoryIds;

    return [
        'name' => $faker->name,
        'description' => $faker->name,
        'date_of_production' => $faker->date(),
        'number' => rand(1, 100),
        'user_id' => $faker->randomElement($userIds ?: $userIds = App\Models\User::pluck('id')->all()),
        'category_id' => $faker->randomElement($categoryIds ?: $categoryIds = App\Models\Category::pluck('id')->all()),
    ];
});
