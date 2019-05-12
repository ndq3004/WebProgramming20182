<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video_lesson extends Model
{
    protected $table = 'video_lesson';
    protected $primaryKey = 'video_id';

    public $timestamps = 'false';
}
