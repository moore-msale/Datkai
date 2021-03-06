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

Route::get('/', 'PageController@index');
Route::get('/catalog', 'PageController@catalog');
Route::get('/about-us', 'PageController@aboutUs');
Route::get('news','PageController@news');
Route::get('/inner-product/{id}', 'PageController@innerProduct');
Route::get('news/{id}','PageController@innerNews');
Route::post('/sendPrice', 'MailController@sendPrice');

Route::group(['prefix' => 'moo'], function () {
    Voyager::routes();
});
