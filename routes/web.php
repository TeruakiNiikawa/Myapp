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

Route::get('/match','MatchController@top')->middleware('auth');
Route::get('/post','PostController@show')->middleware('auth');
Route::get('/mypage','MypageController@show')->middleware('auth');
Route::get('/mypage/create','MypageController@add')->middleware('auth');
Route::post('/mypage/create','MypageController@create')->middleware('auth');
Route::get('/mypage/edit','MypageController@edit')->middleware('auth');
Route::get('/message','MessageController@show')->middleware('auth');
Route::get('/question','QuestionController@show')->middleware('auth');
Route::get('/post/create','PostController@add')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
