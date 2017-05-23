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

Route::get('/','CaremedicosController@home');

Route::get('/signup', 'CaremedicosController@signup');
Route::post('/signup/store','CaremedicosController@store');
Route::get('/signup/store','CaremedicosController@signup');

Route::get('/login','CaremedicosController@login');
Route::post('/login/check','CaremedicosController@check');
Route::get('/login/check','CaremedicosController@login');

Route::get('/blog', 'BlogsController@blog');
Route::get('/userpage/{name}', 'CaremedicosController@user');


Route::get('/test', 'CaremedicosController@test');
Route::get('/logout','CaremedicosController@logout');

Route::get('/userpage/blog/create', 'BlogsController@index');
//Route::get('/userpage/blog/store', 'BlogsController@store');
Route::post('/userpage/blog/store','BlogsController@store');
// Route::get('/blogtemp','BlogsController@blog');
Route::get('/blog/{id}','BlogsController@blogshow');


// Route::get('/?logout=1',function(){
// 	echo 'logout Successful';
// });


// Route::get('customer',function(){
// 	$customer = App\customer::find(1);
// 	echo $customer ->username;
// });

Route::get('/login/forgot','ResetpasswordController@index');
Route::post('/login/forgot/send','ResetpasswordController@send_mail');
Route::get('/resetpassword/{link}/{id}','ResetpasswordController@reset');
Route::post('/resetpassword/store','ResetpasswordController@store');


Route::get('/profile','PatientController@index');
Route::post('/profile/store','PatientController@store');
Route::get('/profile/show','PatientController@show');


// Admin panel
Route::get('/admin','AdminController@index');
Route::get('/admin/signup','AdminController@view');
Route::post('/admin/store','AdminController@store');
Route::post('/admin/check','AdminController@check');
Route::get('/admin/domain','AdminController@domain');
Route::get('/admin/blog/create','AdminController@createblog');
Route::post('/admin/blog/store','AdminController@storeblog');
Route::get('/admin/blog/view','AdminController@viewblog');
Route::get('/admin/blog/{id}/edit','AdminController@editblog');
Route::post('/admin/blog/update','AdminController@updateblog');
Route::get('/admin/logout','AdminController@logout');
Route::get('/admin/domain/show_members','AdminController@showmember');
Route::get('/admin/domain/show_members','AdminController@showmember');
Route::get('/admin/domain/show_members','AdminController@showmember');




