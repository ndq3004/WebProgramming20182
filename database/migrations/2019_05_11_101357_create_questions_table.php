<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
          $table->increments('question_id');
            $table->integer('course_id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->string('content');
            $table->integer('answer_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('answer_id')->references('answer_id')->on('answers');
            $table->foreign('topic_id')->references('topic_id')->on('topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
