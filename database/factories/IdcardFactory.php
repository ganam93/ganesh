<?php

use Faker\Generator as Faker;
use App\API_Models\Idcard;

$factory->define(Idcard::class, function (Faker $faker) {
    return [
        'major' => $faker->randomDigit,
        'minor' => $faker->randomDigit,
        'issued_date'=> $faker->date,
        'expiry_date'=> $faker->date,
        'company_id'=> $faker->numberBetween(1,10),
        'branch_id'=> $faker->numberBetween(0,3),
    ];
});
