<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranches extends Migration
{
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->references('id')->on('companies');
            $table->text('addr_line1');
            $table->text('addr_line2')->nullable();
            $table->string('city',20);        
            $table->string('state',20);
            $table->string('country');
            $table->string('zipcode',10);
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
        Schema::dropIfExists('branches');
    }
}
