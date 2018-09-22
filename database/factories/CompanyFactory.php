<?php

use Faker\Generator as Faker;

$factory->define(App\API_Models\Company::class, function (Faker $faker) {
    return [
        'cname' => $faker->unique()->company,
        'pan' => $faker->creditCardNumber,
        'GST'=> $faker->creditCardNumber,
        'reg_no'=> $faker->creditCardNumber,
        'website'=> $faker->domainName,
        'addr_line1'=> $faker->streetName,                            
        'addr_line2'=> $faker->streetAddress,                        
        'city'=> $faker->city,
        'country'=> $faker->country,
        'zipcode'=> $faker->postcode
    ];
});
