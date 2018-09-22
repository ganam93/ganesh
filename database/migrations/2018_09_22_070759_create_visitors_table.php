<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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
            $table->unsignedInteger('Branch_id')->references('id')->on('branches');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
