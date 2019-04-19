<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Course;

class AdminController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function courses(){
    	return view('course');
    }
    public function users(){
    	$users = User::select()->get();
        return view('Users',['users'=>$users]);
    }
    
}
