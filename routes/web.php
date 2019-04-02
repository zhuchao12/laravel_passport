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


//登陆

Route::get('login','User\UserController@loginView');

Route::post('login','User\UserController@loginAction');

Route::post('api/login','User\UserController@apiLogin');

Route::get('addlist','User\UserController@addlist');
Route::get('useradd','User\UserController@useradd');
Route::get('useradd','User\UserController@TimeOutLogin');

Route::get('status','User\UserController@status');

//注册
Route::get('register','User\UserController@registerView');

Route::post('register','User\UserController@registerAction');


Route::get('center','User\UserController@center')->middleware('check.login');

Route::any('quit','User\UserController@quit');
Route::get('/', 'Test\TestController@aaa')->middleware('check.login');

