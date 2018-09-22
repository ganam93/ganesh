<?php
use Faker\Generator as Faker;

$factory->define(App\API_Models\Visitors::class, function (Faker $faker) {
    return [
        'id_card' => $faker->word,
        'name'=> $faker->word,
        'contact'=> $faker->randomDigit(20),
        'check_in'=> $faker->randomDigit(20),
        'check_out'=> $faker->randomDigit(20),
        'company_id'=> $faker->randomDigit(20),
        'Branch_id'=> $faker->randomDigit(20)
    ];
});