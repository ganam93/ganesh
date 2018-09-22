<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorsTable extends Migration
{
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('location');
            $table->unsignedInteger('company_id')->references('id')->on('companies');
            $table->unsignedInteger('branch_id')->references('id')->on('branches');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}
