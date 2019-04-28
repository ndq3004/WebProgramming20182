<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    protected $table='roles';
    protected $primaryKey='role_id';


    
    public $timestamps='false';
    

    public function admin(){
        return $this->belongsToMany(admin::class, 'admin_roles', 'admin_id', 'role_id');
    }
}
