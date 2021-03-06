<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
        [ 'answer_id'=>'1',
           'rightAnswer'=>'B',
           'ansA'=>'overestimated',
           'ansB'=>'underestimated',
           'ansC'=>'understated',
           'ansD'=>'undercharged'
        ],
        [ 'answer_id'=>'2',
           'rightAnswer'=>'D',
           'ansA'=>'don’t work',
           'ansB'=>'won’t work',
           'ansC'=>'haven’t worked',
           'ansD'=>'aren’t working'
        ],
        [ 'answer_id'=>'3',
           'rightAnswer'=>'B',
           'ansA'=>'isn’t she',
           'ansB'=>'hasn’t she',
           'ansC'=>'doesn’t she',
           'ansD'=>'didn’t she'
        ],
        [ 'answer_id'=>'4',
           'rightAnswer'=>'C',
           'ansA'=>'in the act',
           'ansB'=>'in order',
           'ansC'=>'on duty',
           'ansD'=>'under control'
        ],
        [ 'answer_id'=>'5',
           'rightAnswer'=>'B',
           'ansA'=>'some other',
           'ansB'=>'some others',
           'ansC'=>'anothers',
           'ansD'=>'the other'
        ],
        [ 'answer_id'=>'6',
           'rightAnswer'=>'C',
           'ansA'=>'had conquered',
           'ansB'=>'would conquer',
           'ansC'=>'would have conquered',
           'ansD'=>'conquered'
        ],
        [ 'answer_id'=>'7',
           'rightAnswer'=>'C',
           'ansA'=>'the car of whom',
           'ansB'=>'the car of his',
           'ansC'=>'whose car',
           'ansD'=>'the car of who'
        ],
        [ 'answer_id'=>'8',
           'rightAnswer'=>'D',
           'ansA'=>'talk to',
           'ansB'=>'say to',
           'ansC'=>'tell',
           'ansD'=>'speak to'
        ],
        [ 'answer_id'=>'9',
           'rightAnswer'=>'C',
           'ansA'=>'rather don’t say',
           'ansB'=>'better not to say',
           'ansC'=>'rather not say',
           'ansD'=>'prefer not say'
        ],
        [ 'answer_id'=>'10',
           'rightAnswer'=>'D',
           'ansA'=>'excursion',
           'ansB'=>'visit',
           'ansC'=>'tour',
           'ansD'=>'expedition'
        ],
        [ 'answer_id'=>'11',
           'rightAnswer'=>'A',
           'ansA'=>'came up with',
           'ansB'=>'came up to',
           'ansC'=>'came up against',
           'ansD'=>'came up for'
        ],
        [ 'answer_id'=>'12',
           'rightAnswer'=>'D',
           'ansA'=>'many – floored',
           'ansB'=>'many story',
           'ansC'=>'multi – storied',
           'ansD'=>'multi – storey'
        ],
        [ 'answer_id'=>'13',
           'rightAnswer'=>'D',
           'ansA'=>'Yes, can I help you',
           'ansB'=>'Thanks. Same to you',
           'ansC'=>'Not at all. Don’t mention it',
           'ansD'=>'That’ very kind. Thank you.'
        ],
        [ 'answer_id'=>'14',
           'rightAnswer'=>'A',
           'ansA'=>'drew',
           'ansB'=>'equalled',
           'ansC'=>'equalised',
           'ansD'=>'shared'
        ],
        [ 'answer_id'=>'15',
           'rightAnswer'=>'B',
           'ansA'=>'sang – were going out',
           'ansB'=>'was singing - went out',
           'ansC'=>'was singing – were going out',
           'ansD'=>'sang – went out'
        ],
        [ 'answer_id'=>'16',
           'rightAnswer'=>'B',
           'ansA'=>'when she',
           'ansB'=>'that she',
           'ansC'=>'and she',
           'ansD'=>'she'
        ],
        [ 'answer_id'=>'17',
           'rightAnswer'=>'D',
           'ansA'=>'It was once',
           'ansB'=>'Once it was',
           'ansC'=>'That once',
           'ansD'=>'Once'
        ],
        [ 'answer_id'=>'18',
           'rightAnswer'=>'D',
           'ansA'=>'unpleasant',
           'ansB'=>'unnecessary',
           'ansC'=>'unusual',
           'ansD'=>'unsatisfactory'
        ],
        [ 'answer_id'=>'19',
           'rightAnswer'=>'D',
           'ansA'=>'is there a mistake',
           'ansB'=>'there a mistake is',
           'ansC'=>'a mistake is there',
           'ansD'=>'there is a mistake'
        ],
        [ 'answer_id'=>'20',
           'rightAnswer'=>'D',
           'ansA'=>'Have – been',
           'ansB'=>'Would – be',
           'ansC'=>'Would – have been',
           'ansD'=>'Had – been'
        ],
        [ 'answer_id'=>'21',
           'rightAnswer'=>'A',
           'ansA'=>'I come as well',
           'ansB'=>'also I come',
           'ansC'=>'I too come',
           'ansD'=>'I as well come'
        ],
        [ 'answer_id'=>'22',
           'rightAnswer'=>'C',
           'ansA'=>'harder',
           'ansB'=>'hard',
           'ansC'=>'hardly',
           'ansD'=>'best'
        ],
        [ 'answer_id'=>'23',
           'rightAnswer'=>'A',
           'ansA'=>'ring a bell',
           'ansB'=>'break the ice',
           'ansC'=>'foot the bill',
           'ansD'=>'fall into place'
        ],
        [ 'answer_id'=>'24',
           'rightAnswer'=>'B',
           'ansA'=>'convenient',
           'ansB'=>'convenience',
           'ansC'=>'conveniently',
           'ansD'=>'conveniences'
        ],
        [ 'answer_id'=>'25',
           'rightAnswer'=>'B',
           'ansA'=>'With all my heart',
           'ansB'=>'It’s my pleasure',
           'ansC'=>'Never remind me',
           'ansD'=>'All it is for you'
        ],
        [ 'answer_id'=>'26',
           'rightAnswer'=>'C',
           'ansA'=>'higher',
           'ansB'=>'high',
           'ansC'=>'the higher',
           'ansD'=>'the high'
        ],
        [ 'answer_id'=>'27',
           'rightAnswer'=>'D',
           'ansA'=>'seeking',
           'ansB'=>'to seek',
           'ansC'=>'has sought',
           'ansD'=>'sought'
        ],
        [ 'answer_id'=>'28',
           'rightAnswer'=>'C',
           'ansA'=>'clothing',
           'ansB'=>'clothes',
           'ansC'=>'garment',
           'ansD'=>'clothe'
        ],
        [ 'answer_id'=>'29',
           'rightAnswer'=>'A',
           'ansA'=>'quite agree',
           'ansB'=>'a little agreed',
           'ansC'=>'so agree',
           'ansD'=>'rather agreed'
        ],
        [ 'answer_id'=>'30',
           'rightAnswer'=>'C',
           'ansA'=>'get',
           'ansB'=>'turn',
           'ansC'=>'fall',
           'ansD'=>'bend'
        ],
        [ 'answer_id'=>'31',
           'rightAnswer'=>'A',
           'ansA'=>'a great deal of',
           'ansB'=>'a large quantity',
           'ansC'=>'a large deal of',
           'ansD'=>'a great number of'
        ],
        [ 'answer_id'=>'32',
           'rightAnswer'=>'C',
           'ansA'=>'at',
           'ansB'=>'with',
           'ansC'=>'to',
           'ansD'=>'for'
        ],
        [ 'answer_id'=>'33',
           'rightAnswer'=>'D',
           'ansA'=>'before',
           'ansB'=>'forward',
           'ansC'=>'advance',
           'ansD'=>'ahead'
        ],
        [ 'answer_id'=>'34',
           'rightAnswer'=>'C',
           'ansA'=>'my mind',
           'ansB'=>'time',
           'ansC'=>'purpose',
           'ansD'=>'intention'
        ],
        [ 'answer_id'=>'35',
           'rightAnswer'=>'C',
           'ansA'=>'go',
           'ansB'=>'to have gone',
           'ansC'=>'going',
           'ansD'=>'to go'
        ],
        [ 'answer_id'=>'36',
           'rightAnswer'=>'C',
           'ansA'=>'a large number of',
           'ansB'=>'a lots of',
           'ansC'=>'a lot of',
           'ansD'=>'lot of'
        ],
        [ 'answer_id'=>'37',
           'rightAnswer'=>'C',
           'ansA'=>'at',
           'ansB'=>'over',
           'ansC'=>'on in',
           'ansD'=>'in on'
        ],
        [ 'answer_id'=>'38',
           'rightAnswer'=>'C',
           'ansA'=>'how',
           'ansB'=>'how could',
           'ansC'=>'how we could',
           'ansD'=>'how could we'
        ],
        [ 'answer_id'=>'39',
           'rightAnswer'=>'D',
           'ansA'=>'had served',
           'ansB'=>'has served',
           'ansC'=>'had been serving',
           'ansD'=>'served'
        ],
        [ 'answer_id'=>'40',
           'rightAnswer'=>'A',
           'ansA'=>'let',
           'ansB'=>'allow',
           'ansC'=>'ask',
           'ansD'=>'tell'
        ],
        [ 'answer_id'=>'41',
           'rightAnswer'=>'C',
           'ansA'=>'fair',
           'ansB'=>'sensitive',
           'ansC'=>'subtle',
           'ansD'=>'joint'
        ],
        [ 'answer_id'=>'42',
           'rightAnswer'=>'A',
           'ansA'=>'fraction',
           'ansB'=>'piece',
           'ansC'=>'part',
           'ansD'=>'spot'
        ],
        [ 'answer_id'=>'43',
           'rightAnswer'=>'A',
           'ansA'=>'simultaneously',
           'ansB'=>'communally',
           'ansC'=>'uniformly',
           'ansD'=>'jointly'
        ],
        [ 'answer_id'=>'44',
           'rightAnswer'=>'D',
           'ansA'=>'private',
           'ansB'=>'daily',
           'ansC'=>'constant',
           'ansD'=>'current'
        ],
        [ 'answer_id'=>'45',
           'rightAnswer'=>'A',
           'ansA'=>'issue',
           'ansB'=>'transmit',
           'ansC'=>'print',
           'ansD'=>'project'
        ],
        [ 'answer_id'=>'46',
           'rightAnswer'=>'C',
           'ansA'=>'accused',
           'ansB'=>'enforced',
           'ansC'=>'claimed',
           'ansD'=>'warned'
        ],
        [ 'answer_id'=>'47',
           'rightAnswer'=>'A',
           'ansA'=>'unaware',
           'ansB'=>'unconscious',
           'ansC'=>'unable',
           'ansD'=>'unreasonable'
        ],
        [ 'answer_id'=>'48',
           'rightAnswer'=>'C',
           'ansA'=>' reach ',
           'ansB'=>'arrive',
           'ansC'=>'get ',
           'ansD'=>'approach'
        ],
        [ 'answer_id'=>'49',
           'rightAnswer'=>'D',
           'ansA'=>'description',
           'ansB'=>'instruction',
           'ansC'=>'inscription',
           'ansD'=>'prescription'
        ],
        [ 'answer_id'=>'50',
           'rightAnswer'=>'A',
           'ansA'=>'fare',
           'ansB'=>'amount',
           'ansC'=>'toll',
           'ansD'=>'fine'
        ],
        [ 'answer_id'=>'51',
           'rightAnswer'=>'C',
           'ansA'=>'change',
           'ansB'=>'replace',
           'ansC'=>'substitute',
           'ansD'=>'convert '
        ],
        [ 'answer_id'=>'52',
           'rightAnswer'=>'D',
           'ansA'=>'just',
           'ansB'=>'sane',
           'ansC'=>'fair',
           'ansD'=>'reasonable'
        ],
        [ 'answer_id'=>'53',
           'rightAnswer'=>'B',
           'ansA'=>'speak',
           'ansB'=>'tell',
           'ansC'=>'say',
           'ansD'=>'look'
        ],
        [ 'answer_id'=>'54',
           'rightAnswer'=>'C',
           'ansA'=>'priceless',
           'ansB'=>'worthy',
           'ansC'=>'invaluable',
           'ansD'=>'treasured'
        ],
        [ 'answer_id'=>'55',
           'rightAnswer'=>'C',
           'ansA'=>'incident',
           'ansB'=>'moment',
           'ansC'=>'occasion',
           'ansD'=>'celebration'
        ],
        [ 'answer_id'=>'56',
           'rightAnswer'=>'C',
           'ansA'=>'mix',
           'ansB'=>'blend',
           'ansC'=>'merge',
           'ansD'=>'meet'
        ],
        [ 'answer_id'=>'57',
           'rightAnswer'=>'C',
           'ansA'=>'bite',
           'ansB'=>' scratch',
           'ansC'=>'prick',
           'ansD'=>' sting'
        ],
        [ 'answer_id'=>'58',
           'rightAnswer'=>'C',
           'ansA'=>'waste',
           'ansB'=>'junk',
           'ansC'=>'litter',
           'ansD'=>'debris'
        ],
        [ 'answer_id'=>'59',
           'rightAnswer'=>'A',
           'ansA'=>'convince',
           'ansB'=>'nfluence',
           'ansC'=>'assume',
           'ansD'=>'prove'
        ],
        [ 'answer_id'=>'60',
           'rightAnswer'=>'D',
           'ansA'=>'stolen',
           'ansB'=>'robbed',
           'ansC'=>'ripped',
           'ansD'=>'stripped'
        ],
        [ 'answer_id'=>'61',
           'rightAnswer'=>'A',
           'ansA'=>'contestant',
           'ansB'=>'winner',
           'ansC'=>'opponent',
           'ansD'=>'rival'
        ],
        [ 'answer_id'=>'62',
           'rightAnswer'=>'C',
           'ansA'=>'practice',
           'ansB'=>'inform',
           'ansC'=>'instruct',
           'ansD'=>'rehearse'
        ],
        [ 'answer_id'=>'63',
           'rightAnswer'=>'B',
           'ansA'=>' lecture',
           'ansB'=>'speech',
           'ansC'=>'debate',
           'ansD'=>'talk'
        ],
        [ 'answer_id'=>'64',
           'rightAnswer'=>'D',
           'ansA'=>'take',
           'ansB'=>'bring',
           'ansC'=>'carry',
           'ansD'=>'fetch'
        ],
        [ 'answer_id'=>'65',
           'rightAnswer'=>'C',
           'ansA'=>'rich',
           'ansB'=>' reasonable',
           'ansC'=>'expensive',
           'ansD'=>'precious'
        ],
        [ 'answer_id'=>'66',
           'rightAnswer'=>'D',
           'ansA'=>'period ',
           'ansB'=>'number',
           'ansC'=>'quantity',
           'ansD'=>'deal'
        ],
        [ 'answer_id'=>'67',
           'rightAnswer'=>'A',
           'ansA'=>' observed',
           'ansB'=>' recognized',
           'ansC'=>'uncovered',
           'ansD'=>'discovered'
        ],
        [ 'answer_id'=>'68',
           'rightAnswer'=>'B',
           'ansA'=>' leftover',
           'ansB'=>'rest',
           'ansC'=>'ending',
           'ansD'=>'remaining'
        ],
        [ 'answer_id'=>'69',
           'rightAnswer'=>'D',
           'ansA'=>'emigrate ',
           'ansB'=>'originate',
           'ansC'=>' immigrate',
           'ansD'=>'migrate '
        ],
        [ 'answer_id'=>'70',
           'rightAnswer'=>'B',
           'ansA'=>'delay',
           'ansB'=>' prolong',
           'ansC'=>'stretch',
           'ansD'=>'expand'
        ],
        [ 'answer_id'=>'71',
           'rightAnswer'=>'A',
           'ansA'=>'labour',
           'ansB'=>'duty',
           'ansC'=>'job',
           'ansD'=>'career'
        ],
        [ 'answer_id'=>'72',
           'rightAnswer'=>'A',
           'ansA'=>'shake ',
           'ansB'=>'vibrate',
           'ansC'=>'shiver',
           'ansD'=>'Shudder'
        ],
        [ 'answer_id'=>'73',
           'rightAnswer'=>'C',
           'ansA'=>' shouted ',
           'ansB'=>'mentioned',
           'ansC'=>'muttered',
           'ansD'=>' told '
        ],
        [ 'answer_id'=>'74',
           'rightAnswer'=>'B',
           'ansA'=>' signals ',
           'ansB'=>'signs',
           'ansC'=>'posts',
           'ansD'=>'symbols '
        ],
        [ 'answer_id'=>'75',
           'rightAnswer'=>'A',
           'ansA'=>'leave ',
           'ansB'=>'misplace',
           'ansC'=>'forget ',
           'ansD'=>'lose '
        ],
        [ 'answer_id'=>'76',
           'rightAnswer'=>'D',
           'ansA'=>'back',
           'ansB'=>'off',
           'ansC'=>'on',
           'ansD'=>'over'
        ],
        [ 'answer_id'=>'77',
           'rightAnswer'=>'C',
           'ansA'=>'shadow',
           'ansB'=>'darkness',
           'ansC'=>'shade',
           'ansD'=>'cover'
        ],
        [ 'answer_id'=>'78',
           'rightAnswer'=>'D',
           'ansA'=>'force',
           'ansB'=>'rule',
           'ansC'=>'authority',
           'ansD'=>'power'
        ],
        [ 'answer_id'=>'79',
           'rightAnswer'=>'B',
           'ansA'=>'sleeping',
           'ansB'=>'asleep',
           'ansC'=>'sleepy',
           'ansD'=>'sleepless'
        ],
        [ 'answer_id'=>'80',
           'rightAnswer'=>'A',
           'ansA'=>' grin ',
           'ansB'=>'giggle ',
           'ansC'=>' chuckle',
           'ansD'=>'laugh '
        ],
        [ 'answer_id'=>'81',
           'rightAnswer'=>'D',
           'ansA'=>' swing',
           'ansB'=>'sway ',
           'ansC'=>' twist',
           'ansD'=>'swerve'
           
        ],
        [ 'answer_id'=>'82',
           'rightAnswer'=>'B',
           'ansA'=>'grant ',
           'ansB'=>'scholarship',
           'ansC'=>'donation',
           'ansD'=>' charity '
        ],
        [ 'answer_id'=>'83',
           'rightAnswer'=>'D',
           'ansA'=>'wage',
           'ansB'=>'pay',
           'ansC'=>'salary',
           'ansD'=>'income'
        ],
        [ 'answer_id'=>'84',
           'rightAnswer'=>'D',
           'ansA'=>' flavor',
           'ansB'=>'savour',
           'ansC'=>'odour',
           'ansD'=>'scent '
        ],
        [ 'answer_id'=>'85',
           'rightAnswer'=>'C',
           'ansA'=>'lend',
           'ansB'=>' hire',
           'ansC'=>'rent',
           'ansD'=>'borrow'
        ],
        [ 'answer_id'=>'86',
           'rightAnswer'=>'C',
           'ansA'=>'crash',
           'ansB'=>'smash',
           'ansC'=>'crack',
           'ansD'=>'tear'
        ],
        [ 'answer_id'=>'87',
           'rightAnswer'=>'B',
           'ansA'=>'licence',
           'ansB'=>'permit',
           'ansC'=>'certificate ',
           'ansD'=>' diploma'
        ],
        [ 'answer_id'=>'88',
           'rightAnswer'=>'A',
           'ansA'=>'glance',
           'ansB'=>'gaze',
           'ansC'=>'wink',
           'ansD'=>'stare'
        ],
        [ 'answer_id'=>'89',
           'rightAnswer'=>'B',
           'ansA'=>'bend',
           'ansB'=>'lean',
           'ansC'=>'bow',
           'ansD'=>'stick'
        ],
        [ 'answer_id'=>'90',
           'rightAnswer'=>'A',
           'ansA'=>'directory',
           'ansB'=>'catalogue',
           'ansC'=>'leaflet',
           'ansD'=>'brochure'
        ],
        [ 'answer_id'=>'91',
           'rightAnswer'=>'D',
           'ansA'=>'From my opinion ',
           'ansB'=>'As far as I’m concerning',
           'ansC'=>'For my viewpoint',
           'ansD'=>'As I see it'
        ],
        [ 'answer_id'=>'92',
           'rightAnswer'=>'B',
           'ansA'=>'which time',
           'ansB'=>'when',
           'ansC'=>'when did',
           'ansD'=>'that'
        ],
        [ 'answer_id'=>'93',
           'rightAnswer'=>'C',
           'ansA'=>'Despite ',
           'ansB'=>'In spite of',
           'ansC'=>'Because of',
           'ansD'=>'Although'
        ],
        [ 'answer_id'=>'94',
           'rightAnswer'=>'B',
           'ansA'=>'that',
           'ansB'=>'which',
           'ansC'=>'this',
           'ansD'=>'it'
        ],
        [ 'answer_id'=>'95',
           'rightAnswer'=>'D',
           'ansA'=>'is announcing ',
           'ansB'=>'has announced',
           'ansC'=>' was announced',
           'ansD'=>'is announced'
        ],
        [ 'answer_id'=>'96',
           'rightAnswer'=>'A',
           'ansA'=>'hire purchase',
           'ansB'=>'rent purchase',
           'ansC'=>'small payment',
           'ansD'=>'gradual payment'
        ],
        [ 'answer_id'=>'97',
           'rightAnswer'=>'B',
           'ansA'=>'breakdown',
           'ansB'=>'breakthrough ',
           'ansC'=>' revolution',
           'ansD'=>'technique'
        ],
        [ 'answer_id'=>'98',
           'rightAnswer'=>'C',
           'ansA'=>'under fire ',
           'ansB'=>' to excitement',
           'ansC'=>'on fire',
           'ansD'=>'aside'
        ],
        [ 'answer_id'=>'99',
           'rightAnswer'=>'A',
           'ansA'=>'at length',
           'ansB'=>'at large ',
           'ansC'=>'in length',
           'ansD'=>'on end'
        ],
        [ 'answer_id'=>'100',
           'rightAnswer'=>'D',
           'ansA'=>'fed up',
           'ansB'=>'having enough',
           'ansC'=>' upset with ',
           'ansD'=>'tired of'
        ]
        ]);
    }
}
