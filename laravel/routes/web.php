<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('careindex');
	
});

Route::get('/signup', 'CaremedicosController@signup');

Route::get('/login','CaremedicosController@login');
Route::post('/login/check','CaremedicosController@check');
Route::get('/login/check','CaremedicosController@login');
Route::post('/signup/store','CaremedicosController@store');
Route::get('/signup/store','CaremedicosController@signup');
Route::get('/blog', 'CaremedicosController@blog');
Route::get('/userpage/{name}', 'CaremedicosController@user');

Route::get('/test', 'CaremedicosController@test');
Route::get('/register', function () {
    return view('blog');
	
});


// Route::get('customer',function(){
// 	$customer = App\customer::find(1);
// 	echo $customer ->username;
// });

