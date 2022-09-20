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


Route::get('/','App\Http\Controllers\ContactController@createUserForm');
Route::post('/','App\Http\Controllers\ContactController@UserForm');

Route::get('/connexion','App\Http\Controllers\ContactController@connex');
Route::post('/connexion','App\Http\Controllers\ContactController@connexion');

Route::get('/listeusers','App\Http\Controllers\ContactController@list');

Route::post('/user/{id}','App\Http\Controllers\ContactController@UpdateText')->name('users.updateText');
Route::get('/user/{id}','App\Http\Controllers\ContactController@show')->name('users.show');











    
