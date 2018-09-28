<?php

use Illuminate\Database\Seeder;
use App\API_Models\Branch;
class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Branch::class, 10)->create();
    }
}
