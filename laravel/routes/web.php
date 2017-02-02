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

Route::get('/signup', function () {
    return view('signup');
	
});

Route::get('/login', function () {
    return view('login');
	
});

Route::get('/blog', function () {
    return view('blog');
	
});

Route::get('/blog', function () {
    return view('abc');
	
});

// Route::get('customer',function(){
// 	$customer = App\customer::find(1);
// 	echo $customer ->username;
// });

