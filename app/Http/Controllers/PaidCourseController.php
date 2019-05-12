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
}
