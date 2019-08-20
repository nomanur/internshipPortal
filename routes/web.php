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
    return view('/front/home');
});


Route::group(['middleware'=>'verified'], function(){});
	//students routes
	Route::get('/student/login', 'StudentLoginController@showlogin')->name('student.login');
	Route::post('/student/login', 'StudentLoginController@login');
	Route::get('student/dashboard/{id}', 'StudentLoginController@showDashboard');
	Route::post('student/dashboard', 'StudentLoginController@store');

	//employeers route
	Route::get('employeer/login', 'EmployeerLoginController@showlogin')->name('employeer.login');
	Route::post('/employeer/login', 'EmployeerLoginController@login');
	Route::get('employeer/dashboard/{id}', 'EmployeerLoginController@showDashboard');
	Route::post('employeer/dashboard', 'EmployeerLoginController@store');

	//home route new
	Route::get('/home', 'HomeController@index')->name('home');



Auth::routes(['verify' => true]);


Route::get('/admin', function() {
    return view('admin.index');
});

Route::group(['middleware'=>'admin'], function(){
	Route::resource('admin/users', 'AdminUsersController');
});


