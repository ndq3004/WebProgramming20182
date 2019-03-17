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
     // return view('login');
    return File::get(public_path() . '/views/login.html');
});

Route::get('register', function () {
     // return view('login');
    return File::get(public_path() . '/views/registerTest.html');
});

Route::get('db', function () {
	$dbQ = DB::table("users") -> get();
	return json_encode($dbQ);
});
Route::post("register", "UserController@register")->name('register');
Route::post('dangnhap','LoginController@dangnhap')->name('dangnhap');