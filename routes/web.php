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

Route::get('match','MatchController@top')->middleware('auth');
Route::get('post','PostController@show');
Route::get('mypage','MypageController@show');
Route::get('message','MessageController@show');
Route::get('question','QuestionController@show');
Route::get('login','LoginController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
