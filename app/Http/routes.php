<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 添加路由 可以访问 /now 页面，用于显示当前时间
Route::get('now', function () {
    return date('Y-m-d H:i:s');
});
Route::auth();

Route::get('/home', 'HomeController@index');
