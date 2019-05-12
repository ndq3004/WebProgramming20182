<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_lesson', function (Blueprint $table) {
           $table->increments('video_id');
           $table->string('video_name');
           $table->string('order');
           $table->string('describe');
           $table->string('demo_content');
            $table->integer('course_id')->unsigned();
            $table->integer('video_url')->default('0');
             $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_lesson');
    }
}
