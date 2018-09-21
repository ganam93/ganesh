<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'cname' => $faker->text(20),
        'country' => $faker->text(20),
        'pan' => $faker->text(20),
        'GST'=> $faker->text(20),
        'reg_no'=> $faker->text(20),
        'website'=> $faker->text(20),
        'addr_line1'=> $faker->text(20),
        'addr_line2'=> $faker->text(20),
        'city'=> $faker->text(20),
        'country'=> $faker->text(20),
        'zipcode'=> $faker->asciify('********')
    ];
});
