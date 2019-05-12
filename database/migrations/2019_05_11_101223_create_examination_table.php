<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination', function (Blueprint $table) {
            $table->increments('exam_id');
            $table->string('name');
            $table->string('level');
            $table->string('numRegister')->default('0');//so nguoi dang ki hoc
            $table->string('numRate')->default('0');//số lượt đánh giá
            $table->string('avgRate')->default('0');//điểm đánh giá trung bình
            $table->integer('course_id')->unsigned();
             $table->foreign('course_id')->references('course_id')->on('courses');
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
        Schema::dropIfExists('examination');
    }
}
