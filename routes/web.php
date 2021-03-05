<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\AdvSrcController@index');
Route::get('advsrc/','App\Http\Controllers\AdvSrcController@index');
Route::get('advsrc/create','App\Http\Controllers\AdvSrcController@create');
Route::post('advsrc/create','App\Http\Controllers\AdvSrcController@store');
Route::get('advsrc/read/{id}','App\Http\Controllers\AdvSrcController@show');
Route::get('advsrc/edit/{id}','App\Http\Controllers\AdvSrcController@edit');
Route::post('advsrc/edit/{id}','App\Http\Controllers\AdvSrcController@update');
Route::post('advsrc/delete','App\Http\Controllers\AdvSrcController@destroy');

Route::get('/','App\Http\Controllers\AdvLnkController@index');
Route::get('advlnk/','App\Http\Controllers\AdvLnkController@index');
Route::get('advlnk/create','App\Http\Controllers\AdvLnkController@create');
Route::post('advlnk/create','App\Http\Controllers\AdvLnkController@store');
Route::get('advlnk/read/{id}','App\Http\Controllers\AdvLnkController@show');
Route::get('advlnk/edit/{id}','App\Http\Controllers\AdvLnkController@edit');
Route::post('advlnk/edit/{id}','App\Http\Controllers\AdvLnkController@update');
Route::post('advlnk/delete','App\Http\Controllers\AdvLnkController@destroy');

Route::get('/','App\Http\Controllers\AdvTgtController@index');
Route::get('advtgt/','App\Http\Controllers\AdvTgtController@index');
Route::get('advtgt/create','App\Http\Controllers\AdvTgtController@create');
Route::post('advtgt/create','App\Http\Controllers\AdvTgtController@store');
Route::get('advtgt/read/{id}','App\Http\Controllers\AdvTgtController@show');
Route::get('advtgt/edit/{id}','App\Http\Controllers\AdvTgtController@edit');
Route::post('advtgt/edit/{id}','App\Http\Controllers\AdvTgtController@update');
Route::post('advtgt/delete','App\Http\Controllers\AdvTgtController@destroy');
