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
            $table->string('paymentType', 15);
            $table->unsignedBigInteger('discountID')->nullable();
            $table->unsignedBigInteger('paymentProof')->nullable();
            $table->boolean('isPaid')->default(0);
            $table->unsignedBigInteger('acceptorID');
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
