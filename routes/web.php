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

Route::get('/','App\Http\Controllers\IndexController@index')->name('index');
Route::get('/currency','App\Http\Controllers\CurrencyController@currency')->name('currency');
Route::get('/currency/{currency}','App\Http\Controllers\RegionsController@regionsget')->name('regbank');
Route::get('/regions','App\Http\Controllers\RegionsController@regions')->name('regions');
Route::get('/callback','App\Http\Controllers\CallbackController@callback')->name('about');
Route::POST('/callback','App\Http\Controllers\CallbackController@callstore')->name('aboutstore');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
