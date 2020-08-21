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

Route::get('/momos','MomoController@index')->name('momos.index')->middleware('auth');
Route::get('/momos/create','MomoController@create')->name('momos.create');
Route::post('/momos','MomoController@store')->name('momos.store');
Route::get('/momos/{id}','MomoController@show')->name('momos.show')->middleware('auth');
Route::delete('/momos/{id}', 'MomoController@destroy')->name('momos.destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
