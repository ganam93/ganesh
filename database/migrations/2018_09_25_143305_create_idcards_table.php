<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdcardsTable extends Migration
{
    public function up()
    {
        Schema::create('idcards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('major');
            $table->integer('minor');
            $table->date('issued_date');
            $table->date('expiry_date');
            $table->unsignedInteger('company_id')->references('id')->on('companies');
            $table->unsignedInteger('branch_id')->references('id')->on('branches');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('idcards');
    }
}
