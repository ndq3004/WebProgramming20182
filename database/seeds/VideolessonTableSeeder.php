<?php

use Illuminate\Database\Seeder;

class VideolessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('video_lesson')->insert([
            [   'video_id'=>'1',
            	'course_id'=>'3',
                'video_name'=>'Unit 1: First Greetings',
                'order'=>'1',
                'demo_content'=>'Học cách chào hỏi cho lần đầu tiên gặp ai đó. Hello, Hi, I am ..., Nice to meet you, Nice to meet you too '
            ],
             [   'video_id'=>'2',
            	'course_id'=>'3',
                'video_name'=>'Unit 2: Greetings',
                'order'=>'2',
                'demo_content'=>'Học cách chào hỏi hàng ngày. Good morning, Good afternoon, Good evening, How are you?'
            ],
             [   'video_id'=>'3',
            	'course_id'=>'3',
                'video_name'=>'Unit 3: Farewell',
                'order'=>'3',
                'demo_content'=>'Học cách nói lời tạm biệt. Goodbye, Bye, See you, See you again, See you later, See you soon!'
            ],
             [   'video_id'=>'4',
            	'course_id'=>'3',
                'video_name'=>'Unit 4: Name',
                'order'=>'4',
                'demo_content'=>'Học cách hỏi và giới thiệu về tên. What is your name? What is your full name? How do you spell your name?'
            ],
             [   'video_id'=>'5',
            	'course_id'=>'3',
                'video_name'=>'Unit 5: Hometown and living place',
                'order'=>'5',
                'demo_content'=>'Học cách hỏi và giới thiệu về quê quán và nơi sống. Where are you from? Where do you live?'
            ],
             [   'video_id'=>'6',
            	'course_id'=>'3',
                'video_name'=>'Unit 6: and Marital Status',
                'order'=>'6',
                'demo_content'=>'Học cách hỏi và trả lời thông tin về tuổi, tình trạng hôn nhân. How old are you? Are you married?'
            ],
             [   'video_id'=>'7',
            	'course_id'=>'3',
                'video_name'=>'Unit 7: Jobs and Workplaces',
                'order'=>'7',
                'demo_content'=>'Học cách hỏi và trả lời thông tin nghề nghiệp và nơi làm việc. What is your job? Where do you work?'
            ],
             [   'video_id'=>'8',
            	'course_id'=>'3',
                'video_name'=>'Unit 8: Phone numbers and email addresses',
                'order'=>'8',
                'demo_content'=>'Học cách hỏi và trả lời thông tin số điện thoại, địa chỉ email. What is your phone number? What’s your email address?'
            ],
             [   'video_id'=>'9',
            	'course_id'=>'3',
                'video_name'=>'Unit 9: Hobbies',
                'order'=>'9',
                'demo_content'=>'Học cách hỏi và trả lời về sở thích. What do you like doing in your free time? Do you like traveling?'
            ],
             [   'video_id'=>'10',
            	'course_id'=>'3',
                'video_name'=>'Unit 10: Family',
                'order'=>'10',
                'demo_content'=>'Học cách hỏi và trả lời thông tin về gia đình. How many members are there in your family? How many children do you have?'
            ],
             [   'video_id'=>'11',
            	'course_id'=>'3',
                'video_name'=>'Unit 11: Thank you',
                'order'=>'11',
                'demo_content'=>'Học cách nói cảm ơn. Thanks. Thank you. It is very kind of you. Thank you so much. Thank you for your help.'
            ],
             [   'video_id'=>'12',
            	'course_id'=>'3',
                'video_name'=>'Unit 12: Apology',
                'order'=>'12',
                'demo_content'=>'Học cách nói xin lỗi. Oops, sorry. I am so sorry. Sorry, it was my fault. Sorry, I did mean to do it. I am sorry for being late.'
            ]
        ]);
    }
}
