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
    return view('welcome');
});
//登陆

Route::get('login','User\UserController@loginView');

Route::post('login','User\UserController@loginAction');

Route::post('api/login','User\UserController@apiLogin');



//注册
Route::get('register','User\UserController@registerView');

Route::post('register','User\UserController@registerAction');


Route::get('center','User\UserController@center')->middleware('check.login');

//单点登录
Route::get('dlogin1','User\UserController@loginView');
Route::post('dlogin2','User\UserController@dlogin');
