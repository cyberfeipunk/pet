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
<<<<<<< HEAD
    //return view('welcome');
    return redirect("dashboard");
=======
    $a = __LINE__;
    return view('welcome');
>>>>>>> ce6d55393fbeefa343cfe8cf7d7f329f81a35830
});

//后台管理员登录接口

Route::get('/dashboard/{path?}','Backend\HomeController@index')->where('path', '[\/\w\.-]*');

Auth::routes();
