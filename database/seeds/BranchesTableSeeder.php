<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\API_Models\Branch::class, 10)->create();
    }
}
