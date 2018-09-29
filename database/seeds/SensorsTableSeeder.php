<?php

use Illuminate\Database\Seeder;
use App\API_Models\Sensor;

class SensorsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Sensor::class, 10)->create();
    }
}
