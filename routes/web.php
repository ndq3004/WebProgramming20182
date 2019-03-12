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
		array("quan" => "ngoc"),
		array("quan" => "ngoc"),
		array("quan" => "quan"),
		array("quan" => "quan"),
		array("quan" => "quan")
	);
	return json_encode($josnArr);
});
Route::get('db', function () {
	$dbQ = DB::table("users") -> get();
	return json_encode($dbQ);
});
Route::post("getData", "UserController@postData");
