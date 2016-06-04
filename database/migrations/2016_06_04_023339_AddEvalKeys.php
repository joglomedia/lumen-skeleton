<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvalKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evals', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evals', function (Blueprint $table) {
            //
        });
    }
}
