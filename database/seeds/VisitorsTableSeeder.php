<?php

use Illuminate\Database\Seeder;
use App\API_Models\Visitor;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Visitors::class, 10)->create();
    }
}
