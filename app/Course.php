<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    public $timestamps = 'false';

    public function User_course(){
        return $this->belongsToMany('App\User','user_course', 'user_id', 'course_id');
    }
    public function examination(){
        return $this->hasMany('App\Examination', 'course_id', 'course_id');
    }
}
