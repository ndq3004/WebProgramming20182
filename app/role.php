<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table = 'role';
    public $timestamps = 'false';

    public function user_role(){
        return $this->belongsToMany('users', 'user_role', 'user_id', 'role_id');
    }
}
