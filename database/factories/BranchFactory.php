<?php

use Faker\Generator as Faker;

$factory->define(App\API_Models\Branch::class, function (Faker $faker) {
    return [
        'company_id' => $faker->randomDigit(20),
        'addr_line1' => $faker->word,
        'addr_line2'=> $faker->word,
        'city'=> $faker->word,
        'state'=> $faker->word,
        'country'=> $faker->text(10),
        'zipcode'=> $faker->asciify('********')
    ];
});
