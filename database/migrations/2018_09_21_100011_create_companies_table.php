<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cname',100)->unique();
            $table->string('pan',20)->unique();
            $table->string('GST',20)->unique();
            $table->string('reg_no',20)->unique();
            $table->string('website',50)->nullable();
            $table->text('addr_line1')->nullable();
            $table->text('addr_line2')->nullable();
            $table->string('city',20);        
            $table->string('country',40);
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
        Schema::dropIfExists('companies');
    }
}
