<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20);
            $table->string('subtitle', 50)->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('courseID');
            $table->unsignedBigInteger('coverID')->nullable();
            $table->string('externalLinks');
            $table->unsignedBigInteger('creatorID');
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
        Schema::dropIfExists('contents');
    }
}
