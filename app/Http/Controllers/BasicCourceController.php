<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicCourceController extends Controller
{
    //
    function getTopic($type, $level, $topicid){
        $Query="select questions.content, answers.* from "
                +" questions inner join courses on questions.course_id=courses.course_id"
                +" inner join answers on questions.answer_id=answers.answer_id "
                +" where courses.type=".$type." and courses.level=".$level."";
    }
}
