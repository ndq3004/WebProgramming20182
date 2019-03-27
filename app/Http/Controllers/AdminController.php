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
    public function user(){
    	return view('users');
    }
    public function course(){
    	return view('course');
    }
}
