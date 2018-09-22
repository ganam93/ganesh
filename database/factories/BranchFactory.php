<?php

use Faker\Generator as Faker;

$factory->define(App\API_Models\Branch::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1,10),
        'addr_line1' => $faker->streetName,
        'addr_line2'=> $faker->streetAddress,
        'city'=> $faker->city,
        'state'=> $faker->state,
        'country'=> $faker->country,
        'zipcode'=> $faker->postcode
    ];
});
