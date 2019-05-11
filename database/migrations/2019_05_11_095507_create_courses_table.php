<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
           $table->increments('course_id');//=1
            $table->string('name');
            $table->string('level');//1
            $table->string('discription');
            $table->string('link');
            $table->integer('number-lession');//=0
            $table->string('type');// basic, multichoise, video
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
