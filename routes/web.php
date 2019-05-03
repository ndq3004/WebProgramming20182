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
	return File::get(public_path() . '/views/landingPage.html');
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
	Route::post('checkAnswer', 'BasicCourseController@checkAnswer');
});

Route::get('allUser', 'UserController@allUser');

/*
* Get page after login
*/
Route::get('mainpage', function () {
	return File::get(public_path() . '/views/usercourse.html');
});

/*
*get profile
*/

Route::get('/profile', function(){
	return view("userprofile");
	// return File::get(public_path() . '/views/profile.blade.php');
});

Route::get('/course', function(){
	return view("usercourse");
});

//Route::get('courses',['as'=>'courses','uses'=>'UserController@courses']);
//Route Admin
/*
* Get admin view and data
*/


/*
* Get data for basic cousce
*/
Route::get('getlession/{type}/{level}/{topicid}', 'BasicCourseController@getTopic');


/*
* Generate data
*/
Route::get('gendata', 'GenerateDataController@handleDatabase');


Route::get('getrole','UserController@GetRole');



// Route::get('adminLogin', 'AdminController@getLoginAdmin');
// Route::post('adminLogin','AdminController@postLoginAdmin');
// Route::group(['prefix' => 'admin'],'middleware'=>'login', function() {
//     //
// });
Route::group(['prefix' => 'admin', 'middleware'=>'adminLogin'], function() {
	Route::get('index',[
		'as'=>'index','uses'=>'AdminController@index'
	]);
	Route::get('courseAdmin',
		['as'=>'courseAdmin','uses'=>'AdminController@course'
	]);

	Route::get("userAdmin", ['as'=>'userAdmin','uses'=>'AdminController@users'
]);
});
Route::get('lienket', 'AdminController@user1');

// Route::get('index',
// 	['as'=>'index','uses'=>'AdminController@index'],
// 	 'middleware'=>'login');
// Route::get('courseAdmin',
// 	['as'=>'courseAdmin','uses'=>'AdminController@course'
// ], 'middleware'=>'login');

// Route::get("userAdmin", ['as'=>'userAdmin','uses'=>'AdminController@users'
// ], 'middleware'=>'login');
// Route::get('lienket', 'AdminController@user1');
