<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamEachCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_Course', function (Blueprint $table) {
            $table->integer('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('exam_id');
            $table->foreign('exam_id')->references('id')->on('examination');
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
        Schema::dropIfExists('examEachCourse');
    }
}
