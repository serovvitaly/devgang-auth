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

$regExpPattern = '[a-z]{1}[a-z0-9_\-\.]+';

Auth::routes();

Route::get('/panel', 'PanelController@index')
    ->name('panel')
;

Route::get('/form/{domainUid}/{formName}', 'FormController@getForm')
    ->name('form')
    ->where('domainUid', $regExpPattern)
    ->where('formName', $regExpPattern)
;

Route::post('/form/{domainUid}/{formName}', 'FormController@postForm')
    ->where('domainUid', $regExpPattern)
    ->where('formName', $regExpPattern)
;

Route::get('/success', 'FormController@successForm');

Route::get('/callback', 'CallbackController@callback');
