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
        Schema::create('RFQ', function (Blueprint $table) {
            $table->increments('RFQID');
            $table->string('ItemName', 100);
            $table->integer('MOQ',1);
            $table->decimal('PriceRange', 13, 4);
            $table->string('Specification', 500);
//            $table->*NO Image storage*
            $table->dateTime('DatePost');
            $table->integer('Buyer_BuyerID')->unsigned();
            $table->foreign('Buyer_BuyerID')->references('BuyerID')->on(Buyer);
            $table->integer('Supplier_SupplierID')->unsigned();
            $table->foreign('Supplier_SupplierID')->references('SupplierID')->on('Supplier');
            $table->string('Status_Status')->unsigned();
            $table->foreign('Status_Status')->references('Status')->on('Status');


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
