<?php

use Illuminate\Database\Seeder;
use App\API_Models\Idcard;

class IdcardTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Idcard::class, 10)->create();
    }
}