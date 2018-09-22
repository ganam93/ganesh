<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\API_Models\Company::class, 10)->create();
    }
}
