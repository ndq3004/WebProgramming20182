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
    	 Model::unguard();
        //  $this ->call([
        //      UserTableSeeder::class,
        //      CourseTableSeeder::class,
        //      QuestionTableSeeder::class,
        //      TopicTableSeeder::class,
        //      AnswerTableSeeder::class
        //  ]);
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(TopicTableSeeder::class);
        //$this->call(QuestionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);

        //  $this->call(UserTableSeeder::class);
        //  $this->call(CourseTableSeeder::class);
        //  $this->call(QuestionTableSeeder::class);
        //  $this->call(TopicTableSeeder::class);
        //  $this->call(AnswerTableSeeder::class);

        //  Model::unguard();

    }
}
