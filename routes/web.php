<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('register');
    return File::get(public_path() . '/demo.html');
});
Route::get('ngoc', function () {
	$josnArr = array(
		"arr1", "arr2"
	);
	return json_encode($josnArr);
});
Route::get('db', function () {
	$dbQ = DB::table("users") -> get();
	return json_encode($dbQ);
});
Route::post("getData", "UserController@postData");


/*
* Create by Quan
*/
//get view
Route::get("login", function(){
	return File::get(public_path() . '/views/login.html'); 
});

Route::get("register", function(){
	return File::get(public_path() . '/views/register.html'); 
});

Route::get("userAdmin", function(){
	return File::get(public_path() . '/views/Users.html'); 
});

Route::get("courseAdmin", function(){
	return File::get(public_path() . '/views/Courses.html'); 
});
Route::get('register',['as'=>'signin','uses'=>'RegisterController@postSignin']);

Route::post('register',['as'=>'signin','uses'=>'RegisterController@postSignin']);