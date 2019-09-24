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

//***********************************前台篇****************************************
//首页
Route::get('/', function () {
    return view('index');
});

//用户
Route::prefix('/index')->group(function(){
    Route::get('/courselist','Index\IndexController@courselist');
    Route::get('/user/register','Index\User\UserController@register');
    Route::post('/user/register_do','Index\User\UserController@register_do');
    Route::get('/user/login','Index\User\UserController@login');
});




Route::get('/demo',function () {
    return view('demo1');
});


//**********************************后台篇*********************************************
Route::group(['prefix'=>'inc'], function () {
    Route::get('head', function () {
        return view('admin.inc.head');
    });
    Route::get('left', function () {
        return view('admin.inc.left');
    });
    Route::get('main', function () {
        return view('admin.inc.main');
    });

});

Route::group(['prefix'=>'admin'], function () {
    Route::get('index', function () {
        return view('admin.index');
    });//后台首页
});

//导航
Route::prefix('/admin/rests/navigation')->group(function(){
    Route::get('add','admin\\rests\\navigationController@add');
    Route::get('list','admin\\rests\\navigationController@mlist');
});




