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

// Route::get('/', function () {
//    return view('front/index');
// });
Route::get('/', 'HomeController@index')->name('home');
Route::post('/ajaxLangChange', 'HomeController@ajaxLangChange')->name('ajaxLangChange');
Route::get('/insertDefaultDataIntoDB', 'HomeController@insertDefaultDataIntoDB')->name('insertDefaultDataIntoDB');