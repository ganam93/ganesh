<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('designation');
            $table->string('mobile_no',40);
            $table->string('landline_no',40);
            $table->string('email')->unique();
            $table->unsignedInteger('company_id')->references('id')->on('companies');
            $table->unsignedInteger('branch_id')->references('id')->on('branches');
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
