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
//Route::resource('user','UserController');
Route::get('user','UserController@index')->middleware('test');
Route::get('user/create','UserController@create')->middleware('test');
Route::post('user/create','UserController@store')->middleware('test');
Route::get('user/{id}/edit','UserController@edit')->middleware('test');
Route::patch('user/{id}/edit','UserController@update')->middleware('test');
Route::delete('user/{id}/delete','UserController@destroy')->middleware('test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('testlogin','LoginController@getLogin');
Route::post('testlogin','LoginController@postLogin');
Route::get('testlogout','LoginController@getLogout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//