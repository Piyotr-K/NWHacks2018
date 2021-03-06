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
    return view('index'); //Push that
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('testAjax', 'HomeController@test');

Route::get('testReceive', 'AjaxController@receive');

Route::post('testSend', 'AjaxController@send');
