<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseID');
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');
            $table->longText('imageURL');
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
        Schema::dropIfExists('course_photos');
    }
}
