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

Route::get('/', function () {
    return view('welcome');
});

Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload')->name('post_file');

Route::group(['prefix'=>'api'], function(){
    Route::post('upload/image','ProductController@uploadImage')->name('upload-image');
});


