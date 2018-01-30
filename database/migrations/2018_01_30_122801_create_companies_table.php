<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Country', 100);
            $table->string('Address1', 100);
            $table->string('Address2', 100, nullOrEmptyString());
            $table->integer('Zipcode', 10);
            $table->string('City', 50);
            $table->integer('Supplier_id')->unsigned();
            $table->foreign('Supplier_id')->references('id')->on('Supplier');
            
            
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
