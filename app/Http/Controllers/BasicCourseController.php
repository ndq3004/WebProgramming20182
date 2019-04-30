<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicCourseController extends Controller
{
    //
    function getTopic($type, $level, $topicid){
        $Query="select questions.content, answers.* from"
                +" questions where question_id=?";
                //
                // +" questions inner join courses on questions.course_id=courses.course_id";
                // +" inner join answers on questions.answer_id=answers.answer_id ";
                // +" where courses.type = basic and courses.level = 1 and questions.topic_id = 1 ";
        // $result = DB::select($Query, [$type, $level, $topicid]);
        $result = DB::select("select questions.content, answers.* from
                                questions inner join courses on questions.course_id=courses.course_id
                                inner join answers on questions.answer_id=answers.answer_id 
                                where courses.type=? and courses.level=? and questions.topic_id=?",
                                [$type, $level, $topicid]);
        return $result;
    }   
}
