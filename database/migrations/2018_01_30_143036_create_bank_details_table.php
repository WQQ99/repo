<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankDetailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_details', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('account_no')->nullable();
			$table->string('account_type')->nullable();
			$table->string('bank_name')->nullable();
			$table->integer('card_no')->nullable();
			$table->integer('mm');
			$table->integer('yy');
			$table->integer('cvv');
			$table->integer('card_type_id')->unsigned();
			$table->foreign('card_type_id')->references('id')->on('card_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('bank_details');
	}
}
