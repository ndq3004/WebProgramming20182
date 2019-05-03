<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // Model::unguard();
         $this ->call([
             UserTableSeeder::class,
             CourseTableSeeder::class,
             QuestionTableSeeder::class,
             TopicTableSeeder::class,
              QuestionTableSeeder::class,
             AnswerTableSeeder::class,
         ]);

         
         
         // Model::unguard();
    }
}
