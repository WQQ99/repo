<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRFQsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rfqs', function (Blueprint $table) {
			//            $table->increments('RFQID');
			//            $table->string('ItemName', 100);
			//            $table->integer('MOQ',1);
			//            $table->decimal('PriceRange', 13, 4);
			//            $table->string('Specification', 500);
			////            $table->*NO Image storage*
			//            $table->dateTime('DatePost');
			//            $table->integer('Buyer_BuyerID')->unsigned();
			//            $table->foreign('Buyer_BuyerID')->references('BuyerID')->on(Buyer);
			//            $table->integer('Supplier_SupplierID')->unsigned();
			//            $table->foreign('Supplier_SupplierID')->references('SupplierID')->on('Supplier');
			//            $table->string('Status_Status')->unsigned();
			//            $table->foreign('Status_Status')->references('Status')->on('Status');

			$table->increments('id');
			$table->string('item_name', 100);
			$table->integer('moq')->default(1);
			$table->decimal('price_range', 13, 4)->nullable();
			$table->string('specification', 500)->nullable();
			$table->dateTime('date_posted')->nullable();
			$table->integer('buyer_id')->unsigned();
			$table->foreign('buyer_id')->references('id')->on('buyers');
			$table->integer('supplier_id')->unsigned();
			$table->foreign('supplier_id')->references('id')->on('suppliers');
			$table->integer('status_id')->unsigned();
			$table->foreign('status_id')->references('id')->on('statuses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('r_f_qs');
	}
}
