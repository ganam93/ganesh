<?php

use Illuminate\Database\Seeder;

use App\API_Models\Visitors;
class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Visitors::class, 10)->create();
    }
}
