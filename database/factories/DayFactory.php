<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Day::class, function (Faker $faker) {

    $dt = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    $date = $dt->format("Y-m-d"); // 1994-09-24

    return [
        "date"=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')->unique()->format("Y-m-d"),
        "start_time"=>$faker->time($format = 'H:i:s', $max = 'now'),
        "end_time"=>$faker->time($format = 'H:i:s', $max = 'now'),
        "part_time_start"=>null,
        "part_time_end"=>null,
        "user_id"=>2
    ];
});
