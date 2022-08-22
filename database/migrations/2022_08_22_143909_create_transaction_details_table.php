<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transactionID');
            $table->foreign('transactionID')->references('id')->on('transactions')->onDelete('cascade');
            $table->string('paymentType', 25);
            $table->double('totalPrice');
            $table->unsignedBigInteger('paymentProof')->nullable();
            $table->foreign('paymentProof')->references('id')->on('photos')->onDelete('SET NULL');
            $table->boolean('isPaid')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
