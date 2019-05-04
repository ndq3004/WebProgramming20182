<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\addCourseRequest;
use App\User;
use App\Course;
use Hash;

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
    // public function login(){
    //     //get admin name, password
    //     $adminname = 
    //     //check role
    // }
    public function allUser(){
        //$users = DB::table('user')->get();
        $users = User::select()->get()::paginate(5);
        return view("Users", ['users'=>$users]); 
    }

    public function listUser(){
        
        $users = User::select()->get();
        return view("admin.listUser", ['users'=>$users]); 
    }
     public function listCourse(){
        
        $course = Course::select()->get();
        return view("admin.listCourse", ['course'=>$course]); 
    }

    public function addUser(){
        $users = User::select()->get();
        return view("admin.addUser", ['users'=>$users]); 
    }
    public function postAddUser(addUserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->user_point = $request->user_point;
        $user->save();
        return redirect('listUser')->with(['flash_level'=>'success','flash_message'=>'Thêm User thành công']);
    }

    public function addCourse(){
        $course = Course::select()->get();
        return view("admin.addCourse", ['course'=>$course]); 
    }
    public function postAddCourse(addCourseRequest $request){
        $course = new Course;
        $course->name = $request->name;
        $course->level = $request->level;
        $course->link = $request->link;
        $course->description = $request->description;
        $course->number_lesion = $request->number_lesion;
        $course->type = $request->type;
        $course->save();
        return redirect('listCourse')->with(['flash_level'=>'success','flash_message'=>'Thêm Khóa Học thành công']);
    }
} 
