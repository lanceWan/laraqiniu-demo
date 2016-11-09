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

// 上传页面视图
Route::get('/upload',function ()
{
	return view('index');
});

// form提交到控制器路由
Route::post('upload','UploadController@uploadFile');
