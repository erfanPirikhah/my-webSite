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
    Route::get('/us', 'BlogController@us');
    Route::get('/post', 'BlogController@postAll');
    Route::get('/postShow/{post}', 'BlogController@showPost')->name('post.show');

    Route::get('/sample', 'BlogController@sampleAll');
    Route::get('/sample/{post}', 'BlogController@showSample')->name('sample.show');

});



Route::resource('admin/us', 'Admin\UsController');










Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
