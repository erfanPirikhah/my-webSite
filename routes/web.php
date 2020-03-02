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



Route::group(['namespace'=>'Blog'],function(){
    Route::get('/', 'BlogController@index');
    Route::get('/post', 'BlogController@postAll');
    Route::get('/postShow/{post}', 'BlogController@showPost')->name('post.show');

});














Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
