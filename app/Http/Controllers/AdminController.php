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
         $course = Course::all();
        return view('index',compact('course'));

    	// return view('index');
    }
    public function course(){
         $course = Course::all();
    	return view('course',compact('course'));
    }
    public function users(){
         $users = User::all();
        return view('Users',compact('users'));
    }
    public function user1(){
        $user = new User(); 
        $user::user_role();
    }
    // public function getLoginAdmin()
    // {
    //     return view('login');
    // }
}
