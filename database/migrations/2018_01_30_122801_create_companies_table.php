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
//            $table->increments('CompanyID');
//            $table->string('Country', 100);
//            $table->string('Address1', 100);
//            $table->string('Address2', 100)->nullable();
//            $table->integer('Zipcode', 10);
//            $table->string('City', 50);
//            $table->integer('Supplier_id')->unsigned();
//            $table->foreign('Supplier_id')->references('id')->on('Supplier');

	        $table->increments('id');
	        $table->string('country')->nullable();
	        $table->string('address1')->nullable();
	        $table->string('address2')->nullable();
	        $table->integer('zipcode')->nullable();
	        $table->string('city')->nullable();
	        $table->integer('supplier_id')->unsigned();
	        $table->foreign('supplier_id')->references('id')->on('suppliers');
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
