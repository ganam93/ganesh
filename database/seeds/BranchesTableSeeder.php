<?php

use Illuminate\Database\Seeder;
use App\API_Models\Branch;

class BranchesTableSeeder extends Seeder
{
    public function run()
    {
        factory(Branch::class, 10)->create();
    }
}
