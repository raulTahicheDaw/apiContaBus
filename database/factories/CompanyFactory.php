<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'cif' => $faker->swiftBicNumber,
        'address' => $faker->address,
        'telephone' => $faker->e164PhoneNumber
    ];
});
