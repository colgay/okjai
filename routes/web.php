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
    return view('home');
});

Route::get('', 'ForumController@index');
Route::get('forum/create', 'ForumController@create');
Route::post('forum/store', ['as'=>'forum.store','uses'=>'ForumController@store']);