<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(LaratrustSeeder::class);
    }
}
