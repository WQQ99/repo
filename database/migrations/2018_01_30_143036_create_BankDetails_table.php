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
        Schema::create('BankDetails', function (Blueprint $table) {
          $table->integer('AccNo');
          $table->string('AccType', 50);
          $table->string('BankName', 50);
          $table->integer('CardNo', 19);
          $table->integer('MM', 2);
          $table->integer('YY', 2);
          $table->integer('CVV', 3);
          $table->string('CardType_CardType')->unsigned();
          $table->foreign('CardType_CardType')->references('CardType')->on('CardType');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank-details');
    }
}
