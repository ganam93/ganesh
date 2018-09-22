<?php

use Faker\Generator as Faker;

$factory->define(App\API_Models\Company::class, function (Faker $faker) {
    return [
        'cname' => $faker->unique()->word,
        'pan' => $faker->creditCardNumber,
        'GST'=> $faker->creditCardNumber,
        'reg_no'=> $faker->creditCardNumber,
        'website'=> $faker->domainName,
        'addr_line1'=> $faker->word,
        'addr_line2'=> $faker->word,
        'city'=> $faker->city,
        'country'=> $faker->country,
        'zipcode'=> $faker->numberBetween(100000,999999)
    ];
});
