<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('questions')->insert([
             [     'question_id'=>'1',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'1',
                  'content'=>'He failed in the election just because he ___________ his opponent.' 
            ],
            [     'question_id'=>'2',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'2',
                  'content'=>'They ________because it is a national holiday.' 
            ],
            [     'question_id'=>'3',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'3',
                  'content'=>'She’s finished the course, ____________?' 
            ],
            [     'question_id'=>'4',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'4',
                  'content'=>'“Would you like a beer?” “ Not while I’m ___________”' 
            ],
            [     'question_id'=>'5',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'5',
                  'content'=>'Some friends of mine are really fashion-conscious, while __________ are quite simple.' 
            ],
            [     'question_id'=>'6',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'6',
                  'content'=>'According to some historians, If Napoleon had not invaded Russia, he _________ the rest of the world.' 
            ],
            [     'question_id'=>'7',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'7',
                  'content'=>'Is that the man _________ has been stolen?' 
            ],
            [     'question_id'=>'8',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'8',
                  'content'=>'When someone answers the phone, you say, “ Can I _________Elsie, please?”' 
            ],
            [     'question_id'=>'9',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'9',
                  'content'=>'“ How much do you earn, Mary?” “ I’d___________”' 
            ],
            [     'question_id'=>'10',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'10',
                  'content'=>'Captain Scott’s __________ to the South Pole was marked by disappointment and tragedy.' 
            ],
            [     'question_id'=>'11',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'11',
                  'content'=>'The teacher made a difficult question, but at last, Joe __________ a good answer.' 
            ],
            [     'question_id'=>'12',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'12',
                  'content'=>'There are a lot of __________ buildings in the centre of the city.' 
            ],
            [     'question_id'=>'13',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'13',
                  'content'=>'“ Make yourself at home.” “ ______________”' 
            ],
            [     'question_id'=>'14',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'14',
                  'content'=>'Olypiakos ________ 0 – 0 with Real Madrid in the first leg of the semi-final in Athens.' 
            ],
            [     'question_id'=>'15',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'15',
                  'content'=>'The pop star _________ when the lights _________' 
            ],
            [     'question_id'=>'16',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'16',
                  'content'=>'It was not until she had arrived home ______ remembered her appointment with the doctor.' 
            ],
            [     'question_id'=>'17',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'17',
                  'content'=>'________ a novelty in American retailing, fixed prices are now universal in sales.' 
            ],
            [     'question_id'=>'18',
                  'course_id'=>'1',
                  'topic_id'=>'1',
                  'answer_id'=>'18',
                  'content'=>'Jane will have to repeat the course because her work has been __________' 
            ],
            [     'question_id'=>'19',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'19',
                  'content'=>'I don’t know If _________ in my essay.' 
            ],
            [     'question_id'=>'20',
                  'course_id'=>'1',
                  'topic_id'=>'2',
                  'answer_id'=>'20',
                  'content'=>'_________ you ever ________ the U.S. before your trip in 2006?' 
            ],
            [     'question_id'=>'21',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'21',
                  'content'=>'“We’re going to the seaside.” “Can ___________?”' 
            ],
            [     'question_id'=>'22',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'22',
                  'content'=>'The old man is both deaf and dump. He can ______understand us.' 
            ],
            [     'question_id'=>'23',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'23',
                  'content'=>'Does that name __________ to you?' 
            ],
            [     'question_id'=>'24',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'24',
                  'content'=>'It was a great _________ to have a doctor living near us.' 
            ],
            [     'question_id'=>'25',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'25',
                  'content'=>'“ Thanks for your help.” “ ____________”' 
            ],
            [     'question_id'=>'26',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'26',
                  'content'=>'The greater the demand, __________ the price.' 
            ],
            [     'question_id'=>'27',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'27',
                  'content'=>'In the 1960s, pop art _______ to discover artistic significant in the commercial artifacts of the consumer culture.' 
            ],
            [     'question_id'=>'28',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'28',
                  'content'=>'What is a _________ like that cost?' 
            ],
            [     'question_id'=>'29',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'29',
                  'content'=>'“I think women should not go to work.” “ I __________”' 
            ],
            [     'question_id'=>'30',
                  'course_id'=>'1',
                  'topic_id'=>'3',
                  'answer_id'=>'30',
                  'content'=>'Put your shoes on properly or you’ll ________ over.'
            ],
            [     'question_id'=>'31',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'31',
                  'content'=>'Barney and friends gave children___________ pleasure.' 
            ],
            [     'question_id'=>'32',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'32',
                  'content'=>'Do you have any objections___________ this new road scheme?' 
            ],
            [     'question_id'=>'33',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'33',
                  'content'=>'Despite a lot of hardship, the Green City Project will go___________' 
            ],
            [     'question_id'=>'34',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'34',
                  'content'=>'I am sorry! I did not break that vase on___________' 
            ],
            [     'question_id'=>'35',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'35',
                  'content'=>'I do not feel like___________ to the cinema now.' 
            ],
            [     'question_id'=>'36',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'36',
                  'content'=>'He has___________ money in the bank.' 
            ],
            [     'question_id'=>'37',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'37',
                  'content'=>'There is a good film___________ town.' 
            ],
            [     'question_id'=>'38',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'38',
                  'content'=>'The policeman explained to us___________ get to the market.' // la cau 39
            ],
            [     'question_id'=>'39',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'39',
                  'content'=>'Mr. Brown___________ in the army from 1960 to 1980.'//41 
            ],
            [     'question_id'=>'40',
                  'course_id'=>'1',
                  'topic_id'=>'4',
                  'answer_id'=>'40',
                  'content'=>'Would you please___________ him speak about the new plan.' //42
            ],
            [     'question_id'=>'41',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'41',
                  'content'=>'Although Vicky looked pretty much the same after all those years, I noticed___________ changes which made her look even more beautiful than I remembered.' //44
            ],
            [     'question_id'=>'42',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'42',
                  'content'=>'After hours of bargaining with the salesman, Jake bought the jacket for a _________of the original price.' 
            ],
            [     'question_id'=>'43',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'43',
                  'content'=>'The football match tomorrow evening will be broadcast___________ on TV and radio.' 
            ],
            [     'question_id'=>'44',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'44',
                  'content'=>'Please fill in your employment history, including your___________ employer as well as any previous ones you might have had.' 
            ],
            [     'question_id'=>'45',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'45',
                  'content'=>'Most museums in the city___________ Day Passes at special rates for both pupils and' 
            ],
            [     'question_id'=>'46',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'46',
                  'content'=>'The woman___________ someone had stolen her purse, but although they searched everyone' 
            ],
            [     'question_id'=>'47',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'47',
                  'content'=>'As I was___________ of the change in the program, I arrived half an hour late for the rehearsal.' 
            ],
            [     'question_id'=>'48',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'48',
                  'content'=>'It took us almost four hours to ________ too London.'//1
            ],
            [     'question_id'=>'49',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'49',
                  'content'=>'Some medicines are only available on ________.' 
            ],
            [     'question_id'=>'50',
                  'course_id'=>'1',
                  'topic_id'=>'5',
                  'answer_id'=>'50',
                  'content'=>'She had to pay the adult ________ on the bus because she was 18.' 
            ],
            [     'question_id'=>'51',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'51',
                  'content'=>'If you’re on a diet, you should ........... honey for sugar in you tea.' 
            ],
            [     'question_id'=>'52',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'52',
                  'content'=>' Be ..........., you can’t expect to learn a language in a week.' 
            ],
            [     'question_id'=>'53',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'53',
                  'content'=>'t’s difficult to ........... the difference between margarine and butter.' 
            ],
            [     'question_id'=>'54',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'54',
                  'content'=>' Without her ........... help they would never have survived the terrible ordeal.' 
            ],
            [     'question_id'=>'55',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'55',
                  'content'=>' I remember seeing him on one other ........... with his wife.' 
            ],
            [     'question_id'=>'56',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'56',
                  'content'=>'The two small companies are going to ........... at the end of the year.' 
            ],
            [     'question_id'=>'57',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'57',
                  'content'=>' Be careful not to ........... your finger with that needle.' 
            ],
            [     'question_id'=>'58',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'58',
                  'content'=>'After you’ve eaten those sweets, make sure you throw the ........... in the bin.' 
            ],
            [     'question_id'=>'59',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'59',
                  'content'=>' How can I ........... you of her innocence?' 
            ],
            [     'question_id'=>'60',
                  'course_id'=>'1',
                  'topic_id'=>'6',
                  'answer_id'=>'60',
                  'content'=>' The general was found guilty of dishonourable conduct and ........... of his rank.' 
            ],
            [     'question_id'=>'61',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'61',
                  'content'=>'Every ........... must take a drug test before the race.' 
            ],
            [     'question_id'=>'62',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'62',
                  'content'=>'Gavin was hired to........... young police cadets in the art of self-defence.' 
            ],
            [     'question_id'=>'63',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'63',
                  'content'=>'My headmaster made a ........... at his retirement party.' 
            ],
            [     'question_id'=>'64',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'64',
                  'content'=>'Can you ........... the children from school since you’re going out? ' 
            ],
            [     'question_id'=>'65',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'65',
                  'content'=>'That coat is far too...........; I’ll never be able to afford it.' 
            ],
            [     'question_id'=>'66',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'66',
                  'content'=>'She spends a great ........... of her time in London.' 
            ],
            [     'question_id'=>'67',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'67',
                  'content'=>' The scientists ........... the behavior of the laboratory animals.' 
            ],
            [     'question_id'=>'68',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'68',
                  'content'=>'She used the ........... of the cloth to make a patchwork quilt.' 
            ],
            [     'question_id'=>'69',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'69',
                  'content'=>' Many birds ........... south during the winter months.' 
            ],
            [     'question_id'=>'70',
                  'course_id'=>'1',
                  'topic_id'=>'7',
                  'answer_id'=>'70',
                  'content'=>'Certain medicines can now help to ........... life.' 
            ],
            [     'question_id'=>'71',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'71',
                  'content'=>'Workers are paid money for their ............' 
            ],
            [     'question_id'=>'72',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'72',
                  'content'=>' When he is nervous, his hands ............' 
            ],
            [     'question_id'=>'73',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'73',
                  'content'=>'He ........... something under his breath' 
            ],
            [     'question_id'=>'74',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'74',
                  'content'=>'He often gets lost because he never pays attention to the road ..........' 
            ],
            [     'question_id'=>'75',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'75',
                  'content'=>'If you ........... your gloves there, you’ll never remember to pick them up.'
            ],
            [     'question_id'=>'76',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'76',
                  'content'=>'The baby tried to walk, but it kept falling ...........' 
            ],
            [     'question_id'=>'77',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'77',
                  'content'=>'The sun is too hot – let’s sit in the ........... ' 
            ],
            [     'question_id'=>'78',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'78',
                  'content'=>'The Republican Party have been in ........... in the U.S.A since 2000.' 
            ],
            [     'question_id'=>'79',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'79',
                  'content'=>'He was so tired that he fell ........... during the lecture.' 
            ],
            [     'question_id'=>'80',
                  'course_id'=>'1',
                  'topic_id'=>'8',
                  'answer_id'=>'80',
                  'content'=>'A huge ........... spread across her face when she saw her boyfriend.' 
            ],
            [     'question_id'=>'81',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'81',
                  'content'=>'The driver had to ........... quickly to avoid hitting a tree.' 
            ],
            [     'question_id'=>'82',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'82',
                  'content'=>'James won a ........... to go and study in America.' 
            ],
            [     'question_id'=>'83',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'83',
                  'content'=>'Working in the bar at night provided another source of ........... for Paul.' 
            ],
            [     'question_id'=>'84',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'84',
                  'content'=>'The ........... of the roses was beautiful.' 
            ],
            [     'question_id'=>'85',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'85',
                  'content'=>'My friends and I are going to ........... a house together.' 
            ],
            [     'question_id'=>'86',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'86',
                  'content'=>'Be careful skating on that bond – the ice might ...........' 
            ],
            [     'question_id'=>'87',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'87',
                  'content'=>' You need a ........... to be able to park your car there.' 
            ],
            [     'question_id'=>'88',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'88',
                  'content'=>'I didn’t have time to read the newspaper but I had a quick ........... at the headlines.' 
            ],
            [     'question_id'=>'89',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'89',
                  'content'=>'I had to ........... out of the window to shout to him.' 
            ],
            [     'question_id'=>'90',
                  'course_id'=>'1',
                  'topic_id'=>'9',
                  'answer_id'=>'90',
                  'content'=>'Look in the telephone ........... for his phone number.' 
            ],
            [     'question_id'=>'91',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'91',
                  'content'=>'________, technology is moving too fast.' 
            ],
            [     'question_id'=>'92',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'92',
                  'content'=>'Do you remember ________ the first men set foot on the Moon?' 
            ],
            [     'question_id'=>'93',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'93',
                  'content'=>'________ the noise from the construction work, the children couldn’t concentrate on their lessons.' 
            ],
            [     'question_id'=>'94',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'94',
                  'content'=>' My phone is out of order, ________ is a nuisance.' 
            ],
            [     'question_id'=>'95',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'95',
                  'content'=>'It ________ that a new drug has been found to cure that fatal disease.' 
            ],
            [     'question_id'=>'96',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'96',
                  'content'=>' We couldn’t afford to buy a computer so we got it on ________ and paid monthly installments until it was finally ours.' 
            ],
            [     'question_id'=>'97',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'97',
                  'content'=>'The optic fiber was a major ________ in the field of telecommunications.' 
            ],
            [     'question_id'=>'98',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'98',
                  'content'=>' J.K. Rowling’s Harry Potter books really set young children ________.' 
            ],
            [     'question_id'=>'99',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'99',
                  'content'=>'They discussed the problem ________ but they just couldn’t solve it.' 
            ],
            [     'question_id'=>'100',
                  'course_id'=>'1',
                  'topic_id'=>'10',
                  'answer_id'=>'100',
                  'content'=>' Are you ________ doing things that you find boring?' 
            ]

        ]);
    }
}
