<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationTable extends Migration
{
    /**
     * Run the migrations.
     * Write by Quan
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination', function (Blueprint $table) {
            $table->increments('exam_id');
            $table->string('name');
            $table->string('level');
            $table->string('numRegister');//so nguoi dang ki hoc
            $table->string('numRate')->default('0');//số lượt đánh giá
            $table->string('avgRate')->default('0');//điểm đánh giá trung bình
            $table->string('course_id');
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
