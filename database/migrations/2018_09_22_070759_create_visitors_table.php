<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_card');
            $table->string('name',20);     
            $table->unsignedInteger('contact');
            $table->unsignedInteger('check_in');
            $table->unsignedInteger('check_out');
            $table->unsignedInteger('company_id')->references('id')->on('companies');
            $table->unsignedInteger('branch_id')->references('id')->on('branches');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
