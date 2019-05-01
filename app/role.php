<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';
    protected $primanyKey = 'role_id';
    public $timestamps = 'false';

    public function user(){
        return $this->belongsToMany(User::class, 'user_role', 'user_id', 'role_id');
    }

    public function admin(){
        return $this->belongsToMany(admin::class, 'admin_role', 'admin_id', 'role_id');
    }
}
