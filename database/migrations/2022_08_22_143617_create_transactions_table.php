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
            $table->unsignedBigInteger('userID')->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('SET NULL');
            $table->unsignedBigInteger('courseID')->nullable();
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('SET NULL');
            $table->string('token')->nullable();
            $table->unsignedBigInteger('discountID')->nullable();
            $table->foreign('discountID')->references('id')->on('discounts')->onDelete('SET NULL');
            $table->unsignedBigInteger('acceptorID')->nullable();
            $table->foreign('acceptorID')->references('id')->on('users')->onDelete('SET NULL');
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
