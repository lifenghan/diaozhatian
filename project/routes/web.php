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

Route::get('/', function(){

   
	echo 666;

});

//用户    模块

Route::resource('/index','Admin\Admin\UserController');

Route::resource('/admin','Admin\Admin\IndexController');


Route::get('/addadmin/{id}','Admin\Admin\IndexController@address');









