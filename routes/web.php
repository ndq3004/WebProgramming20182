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
Route::post('auth/login',['as'=>'auth/login','uses'=>'UserController@login']);
/*
login admin
*/
Route::post('loginAdmin',['as'=>'loginAdmin','uses'=>'UserController@loginAdmin']);

Route::group(['middleware' => 'jwt.auth'], function () {
	Route::get('user-info', 'UserController@getUserInfo');
	Route::post('checkAnswer', 'BasicCourseController@checkAnswer');
	Route::get('userProfile', 'UserController@getUserProfile');
	Route::put('updateProfile', 'UserController@updateProfile');
	Route::get('checkAuthen', function(){
		return 'success';
	});
	//lấy thông video và course để hiển thị lên trang lesson video( trang xem cụ thể 1 video)
	Route::get('getCourseInfo/{course_id}', 'PaidCourseController@getCourseInfo');
	Route::get('getVideoLessonInfo/{course_id}/{video_id}', 'PaidCourseController@getVideoLessonInfo');
	Route::get('getCourseVideo/{course_id}', 'PaidCourseController@getCourseVideo');
	Route::post('updateRegisterCourse', 'UserController@updateRegisterCourse');
	Route::get('checkIfUserRegisteredCourse/{course_id}', 'UserController@checkIfUserRegisteredCourse');
});

Route::get('allUser', 'UserController@allUser');
Route::get('course',function () {
	
	return File::get(public_path() . '/views/registercourse.html');
});



/*
* Get page after login
*/
Route::get('mainpage', function () {
	return File::get(public_path() . '/views/coursebasic.html');
});
// Route::get('profile', function () {
// 	return File::get(public_path() . '/views/userprofile.html');
// });
 // Route::get('profile', 'UserController@thongtin');

Route::get('paid', function () {
	return File::get(public_path() . '/views/coursepaid.html');
});

Route::get('profile', function () {
	return File::get(public_path() . '/views/userprofile.html');
});
//get video lesstion html
Route::get('videolession', function () {
	return File::get(public_path() . '/views/lessionVideo.html');
});

/*
*get profile
*/

// Route::get('/profile', function(){
// 	return view("userprofile");
// 	// return File::get(public_path() . '/views/profile.blade.php');
// });

// Route::get('/course', function(){
// 	return view("usercourse");
// });

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




Route::group(['prefix'=>'admin'],function(){
	Route::get('index',['as'=>'index','uses'=>'AdminController@index']);
	Route::get("userAdmin", ['as'=>'userAdmin','uses'=>'AdminController@users']);
	Route::get('courseAdmin',['as'=>'courseAdmin','uses'=>'AdminController@course']);
	//Route::get('lienket', 'AdminController@user1');
});


Route::get('listUser',['as'=>'listUser','uses'=>'AdminController@listUser']);
Route::get('listCourse',['as'=>'listCourse','uses'=>'AdminController@listCourse']);

Route::get('addCourse',['as'=>'addCourse','uses'=>'AdminController@addCourse']);
Route::get('addUser',['as'=>'addUser','uses'=>'AdminController@addUser']);

Route::post('postAddUser',['as'=>'postAddUser','uses'=>'AdminController@postAddUser']);
Route::post('postAddCourse',['as'=>'postAddCourse','uses'=>'AdminController@postAddCourse']);


Route::get('editUser/{id}',['as'=>'editUser','uses'=>'AdminController@editUser']);
Route::post('postEditUser/{id}',['as'=>'postEditUser','uses'=>'AdminController@postEditUser']);
