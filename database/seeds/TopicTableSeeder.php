<?php

use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('topic')->insert([
            [   'topic_id'=>'1',
            	'topicName'=>'synthetic_vocabulary1'
            ],
            [   'topic_id'=>'2',
            	'topicName'=>'synthetic_vocabulary2'
            ],
            [   'topic_id'=>'3',
            	'topicName'=>'synthetic_vocabulary3'
            ],
            [   'topic_id'=>'4',
            	'topicName'=>'synthetic_vocabulary4'
            ],
            [   'topic_id'=>'5',
            	'topicName'=>'synthetic_vocabulary5'
            ],
            [   'topic_id'=>'6',
            	'topicName'=>'synthetic_vocabulary6'
            ],
            [   'topic_id'=>'7',
            	'topicName'=>'synthetic_vocabulary7'
            ],
            [   'topic_id'=>'8',
            	'topicName'=>'synthetic_vocabulary8'
            ],
            [   'topic_id'=>'9',
            	'topicName'=>'synthetic_vocabulary9'
            ],
            [   'topic_id'=>'10',
            	'topicName'=>'highter_education'
            ]
        ]);
    }
}
