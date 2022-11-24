<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('courseID')->nullable();
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('SET NULL');
            $table->unsignedBigInteger('startLessonID')->nullable();
            $table->foreign('startLessonID')->references('id')->on('lessons')->onDelete('SET NULL');
            $table->unsignedBigInteger('endLessonID')->nullable();
            $table->foreign('endLessonID')->references('id')->on('lessons')->onDelete('SET NULL');
            $table->unsignedBigInteger('progressLessonID')->nullable();
            $table->foreign('progressLessonID')->references('id')->on('lessons')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_courses');
    }
}
