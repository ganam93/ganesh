<?php

use Illuminate\Database\Seeder;
use App\API_Models\Company;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        factory(Company::class, 10)->create();
    }
}
