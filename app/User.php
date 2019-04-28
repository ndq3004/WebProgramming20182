<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected  $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    public $timestamps = false;

    public function user_role(){
        return $this->belongsToMany(role::class,'user_role', 'role_id', 'user_id');
    }
    public function user_course(){
        return $this->belongsToMany('App\Course','user_course', 'course_id', 'user_id');
    }

}
