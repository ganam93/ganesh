<?php

use Illuminate\Database\Seeder;

use App\API_Models\Visitor;
class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Visitor::class, 10)->create();
    }
}
