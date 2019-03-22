<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_course', function (Blueprint $table) {
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->dateTime('create_at');
            $table->integer('role_id');
            $table->foreign('role_id')->references('id')->on('users');
            $table->dateTime('expire_at');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_course');
    }
}
