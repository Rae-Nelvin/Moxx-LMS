<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->foreign('transactionID')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('discountID')->references('id')->on('discounts')->onDelete('SET NULL');
            $table->foreign('paymentProof')->references('id')->on('photos')->onDelete('SET NULL');
            $table->foreign('acceptorID')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropForeign('transaction_details_transactionID_foreign');
            $table->dropForeign('transaction_details_discountID_foreign');
            $table->dropForeign('transaction_details_paymentProof_foreign');
            $table->dropForeign('transaction_details_acceptorID_foreign');
        });
    }
}
