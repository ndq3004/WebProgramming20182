<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('courses')->insert([
            [   'course_id'=>'1',
                'name'=>'Khóa cơ bản',
                'level'=>'1',
                'discription'=>'none',
                'link'=>'none',
                'number-lession'=>'0',
                'type'=>'basic'
            ],
            [
                'course_id'=>'2',
                'name'=>'Khóa cơ bản',
                'level'=>'2',
                'discription'=>'none',
                'link'=>'none',
                'number-lession'=>'0',
                'type'=>'basic'
            ],
            [
                'course_id'=>'3',
                'name'=>'Khóa trả phí',
                'level'=>'3',
                'discription'=>'none',
                'link'=>'none',
                'number-lession'=>'12',
                'type'=>'video'
            ]



        ]);
        }
        
    }

  