<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    public $timestamps = 'false';

    public function User_course(){
        return $this->belongsToMany('users','user_course', 'user_id', 'course_id');
    }
}
