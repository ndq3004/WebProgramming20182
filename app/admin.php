<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    protected  $primaryKey = 'admin_id';

    public $timestamp='false';

    public function roles(){
        return  $this->belongsToMany(roles::class, 'admin_roles', 'role_id', 'admin_id');
    }
}
