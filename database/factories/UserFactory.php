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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'driver_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
        'telephone' => $faker->e164PhoneNumber,
        'other_telephone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'company_id' => 1,
        'remember_token' => str_random(10),
    ];
});
