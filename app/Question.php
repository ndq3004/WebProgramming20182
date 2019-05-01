<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';
    protected $primaryKey = 'question_id';

    public $timestamps = 'false';

    
}
