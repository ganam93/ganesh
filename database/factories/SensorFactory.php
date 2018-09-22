<?php

use Faker\Generator as Faker;
use App\API_Models\Sensor;

$factory->define(Sensor::class, function (Faker $faker) {
    return [
        'manufacturer' => $faker->company,
        'model' => $faker->creditCardNumber,
        'location'=> $faker->text(20),
        'company_id'=> $faker->numberBetween(1,10),
        'branch_id'=> $faker->numberBetween(0,3),
    ];
});
