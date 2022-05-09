<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionDetailsRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->foreign('transactionID')->references('id')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paymentProof')->references('id')->on('photos')->onUpdate('cascade');
            $table->foreign('accepted_by')->references('id')->on('admins')->onUpdate('cascade');
            $table->foreign('discountID')->references('id')->on('discounts')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('transaction_details_paymentProof_foreign');
            $table->dropForeign('transaction_details_accepted_by_foreign');
            $table->dropForeign('transaction_details_discountID_foreign');
        });
    }
}
