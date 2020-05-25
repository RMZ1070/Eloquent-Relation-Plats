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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/saveur/{id}', 'PlatController@show')->name('saveur');
Route::get('/creap','PlatController@create')->name('createP');

route::post('/saveP','PlatController@store')->name('saveP');
Route::get('/creaS','SaveurController@create')->name('createS');

route::post('/saveS','SaveurController@store')->name('saveS');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
