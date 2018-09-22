<?php

use Faker\Generator as Faker;

$factory->define(App\API_Models\Branch::class, function (Faker $faker) {
    return [
        'company_id' => $faker->randomDigit(20),
        'addr_line1' => $faker->text(20),
        'addr_line2'=> $faker->text(20),
        'city'=> $faker->text(20),
        'state'=> $faker->text(50),
        'country'=> $faker->text(50),
        'zipcode'=> $faker->asciify('********')
    ];
});
