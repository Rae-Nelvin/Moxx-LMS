<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('coverID')->references('id')->on('photos')->onDelete('SET NULL');
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
        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign('contents_courseID_foreign');
            $table->dropForeign('contents_coverID_foreign');
            $table->dropForeign('contents_creatorID_foreign');
        });
    }
}
