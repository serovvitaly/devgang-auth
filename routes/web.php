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

Auth::routes();

Route::get('/panel', 'PanelController@index')->name('panel');

Route::get('/form/{ownerUid}/{formName}', 'FormController@getForm')->name('form');

Route::post('/form/{ownerUid}/{formName}', 'FormController@postForm');
