<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('contactno', 20)->nullable();
	        $table->string('address_line_1', 200)->nullable();
	        $table->string('address_line_2', 200)->nullable();
	        $table->integer('zipcode')->nullable();
	        $table->string('city', 200)->nullable();
	        $table->integer('user_id')->unsigned()->nullable();
	        $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
