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
            $table->foreign('coverID')->references('id')->on('photos')->onDelete('SET NULL');
            $table->foreign('courseTypeID')->references('id')->on('course_types')->onDelete('SET NULL');
            $table->foreign('creatorID')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('discountID')->references('id')->on('discounts')->onDelete('SET NULL');
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
