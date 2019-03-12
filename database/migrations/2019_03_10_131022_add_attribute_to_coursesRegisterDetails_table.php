<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributeToCoursesRegisterDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courseRegisterDetails', function (Blueprint $table) {
            //
            $table->string('user_Id');
            $table->string('course_Id');
            $table->string('UserName');
            $table->string('courseName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courseRegisterDetails', function (Blueprint $table) {
            //
        });
    }
}
