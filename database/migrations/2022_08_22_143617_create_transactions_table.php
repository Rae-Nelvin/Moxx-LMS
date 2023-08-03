<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('courseID');
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');
            $table->string('token');
            $table->unsignedBigInteger('acceptorID');
            $table->foreign('acceptorID')->references('id')->on('users')->onDelete('cascade');
            $table->double('totalPrice');
            $table->enum('status', ['Unpaid', 'Paid', 'Approved']);
            $table->longText('midtrans_url')->nullable();
            $table->string('midtrans_booking_code')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
