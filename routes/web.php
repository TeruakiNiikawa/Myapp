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

Route::get('mach/create','MachController@add');
Route::get('post/create','PostController@add');
Route::get('mypage/create','MypageController@add');
Route::get('message/create','MessageController@add');
Route::get('question/create','QuestionController@add');