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
            $table->unsignedBigInteger('courseid');
            $table->unsignedBigInteger('cover');
            $table->string('externalLinks');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('courseid')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cover')->references('id')->on('photos');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
