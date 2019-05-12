<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\video_lesson;
class PaidCourseController extends Controller
{
    public function getCourseVideo($course_id)
    {
        $courseVideo = DB::select("select * from video_lesson where course_id=?", [$course_id]);
        return $courseVideo;
    }

    
    public function getVideoLessonInfo($course_id, $video_id){
        // $courseInfo = DB::select("select * from courses where course_id=?",[$course_id]);
        $courseInfo = DB::table('courses')->where('course_id', $course_id)->first();
        $videoInfo = DB::table('video_lesson')->where('video_id', $video_id)->first();
        // $videoInfo = DB::select("select * from video_lesson where video_id=?",[$video_id]);
        return response()->json(["course"=>$courseInfo, "video"=>$videoInfo]); 
    }

    public function getCourseInfo($course_id){
        $courseInfo = DB::table('courses')->where('course_id', $course_id)->first();
        return response()->json($courseInfo);
    }
    public function getSingleVideoInfo($video_id){
    	$lessonVideo = DB::select("select * from video_lesson where video_id=?", [$video_id]);
        return $lessonVideo;

    }
}
