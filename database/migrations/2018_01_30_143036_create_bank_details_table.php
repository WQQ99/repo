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
			$table->integer('account_no');
			$table->string('account_type');
			$table->string('bank_name');
			$table->integer('card_no');
			$table->integer('mm', 2);
			$table->integer('yy', 2);
			$table->integer('cvv', 3);
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
