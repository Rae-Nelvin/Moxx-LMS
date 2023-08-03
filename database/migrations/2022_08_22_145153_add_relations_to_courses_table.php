<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('courseTypeID')->references('id')->on('course_types')->onDelete('cascade');
            $table->foreign('creatorID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_coverID_foreign');
            $table->dropForeign('courses_courseTypeID_foreign');
            $table->dropForeign('courses_creatorID_foreign');
            $table->dropForeign('courses_discountID_foreign');
        });
    }
}
