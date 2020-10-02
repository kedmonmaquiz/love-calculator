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

Route::redirect('/','/love');

Route::get('l/{id}/{code}','App\Http\Controllers\AppController@index');

Route::post('/{id}/{code}','App\Http\Controllers\AppController@storeFriend');

Route::get('/love','App\Http\Controllers\AppController@createOwner');

Route::post('/love','App\Http\Controllers\AppController@storeOwner');

Route::get('/love/{id}/{code}','App\Http\Controllers\AppController@ownerDashboard');

