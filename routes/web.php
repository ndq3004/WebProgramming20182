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
    return File::get(public_path() . '/views/usercourse.html');
});

/*
* Get view login, register
*/
Route::get('login', 'UserController@viewLogin');
Route::get('register', 'UserController@viewRegister');
/*
* signin and signup using JWT 
*/
Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'UserController@getUserInfo');
});
Route::get('allUser', 'UserController@allUser');


Route::get('/profile', function(){
	return view("userprofile");
	// return File::get(public_path() . '/views/profile.blade.php');
});
Route::get('/home', function(){
	return view("test");
});
Route::get('/course', function(){
	return view("usercourse");
});

//Route::get('courses',['as'=>'courses','uses'=>'UserController@courses']);
//Route Admin
/*
* Get admin view and data
*/

Route::get('index',['as'=>'index','uses'=>'AdminController@index']);
Route::get('courseAdmin',['as'=>'course','uses'=>'AdminController@course']);

Route::get("userAdmin", 'AdminController@users');


/*
* Get data for basic cousce
*/
Route::get('getlession/{type}/{level}/{topicid}', 'BasicCourseController@getTopic');


/*
* Generate data
*/
Route::get('gendata', 'GenerateDataController@handleDatabase');
Route::get('lienket', 'AdminController@user1');

Route::get('getrole','UserController@GetRole');