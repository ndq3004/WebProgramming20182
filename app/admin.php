<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $table = 'admin';
    protected  $primaryKey = 'admin_id';

    public $timestamp='false';

    public function roles(){
        return  $this->belongsToMany(roles::class, 'admin_roles', 'role_id', 'admin_id');
    }
}
