<?php

use Illuminate\Database\Seeder;
use App\API_Models\Visitor;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Visitor::class, 10)->create();
    }
}
