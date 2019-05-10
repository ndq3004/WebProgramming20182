<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Answer;
use App\Services\PayUService\Exception;

class BasicCourseController extends Controller
{
    //
    function getTopic($type, $level, $topicid){
        // $Query="select questions.content, answers.* from"
        //         +" questions where question_id=?";
                //
                // +" questions inner join courses on questions.course_id=courses.course_id";
                // +" inner join answers on questions.answer_id=answers.answer_id ";
                // +" where courses.type = basic and courses.level = 1 and questions.topic_id = 1 ";
        // $result = DB::select($Query, [$type, $level, $topicid]);
        $result = DB::select("select questions.*, answers.* from
                                questions inner join courses on questions.course_id=courses.course_id
                                inner join answers on questions.answer_id=answers.answer_id 
                                where courses.type=? and courses.level=? and questions.topic_id=?",
                                [$type, $level, $topicid]);
        return $result;
    }  
    
    function checkAnswer(Request $request){
        $user = JWTAuth::toUser($request->header('token'));
        $data = Input::get('submitAnswers');
        $point = count($data);
        foreach($data as $element){
            try {
                if($element == null) break;
              }
              catch (\Exception $e) {
                break;                  
              }
            $check = DB::select("
                select answers.rightAnswer from answers 
                inner join questions on answers.answer_id=questions.answer_id 
                where questions.question_id=?
            ", [$element['questionid']]);   
            $answer = json_decode(json_encode($check), True)[0]['rightAnswer'];
            if(strcmp($element['answer'], $answer) != 0){
                $point--;
            }
        }
        try{
            $user->user_point = $point;
        }
        catch(Exception $e){
            return "cap nhat diem that bai";
        }
        return $point;
    }
}
