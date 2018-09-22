<?php

use Faker\Generator as Faker;
use App\API_Models\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'designation' => $faker->jobTitle,
        'mobile_no'=> $faker->phoneNumber,             
        'landline_no'=> $faker->e164PhoneNumber,     
        'email'=> $faker->email,
        'company_id'=> $faker->numberBetween(1,10),
        'branch_id'=> $faker->numberBetween(0,3),
    ];
});
