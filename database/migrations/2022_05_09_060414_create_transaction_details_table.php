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
            $table->string('paymentType', 15)->nullable();
            $table->unsignedBigInteger('discountID')->nullable();
            $table->unsignedBigInteger('paymentProof')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->unsignedBigInteger('accepted_by')->nullable();
            $table->timestamps();
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
