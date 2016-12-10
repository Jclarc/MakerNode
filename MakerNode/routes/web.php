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

Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');

Route::get('/logout',function (){return view('logout');});

Route::get('/profile','ProfileController@index');

Route::get('/forum','ForumController@index');

Auth::routes();

/*
Route::group(['middleware' => ['web']], function () {
    // Put all your routes inside here.
});
Route::get('/forum', function (){
    return view('master');
});
*/