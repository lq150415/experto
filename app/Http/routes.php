<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('login',  ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');
Route::post('registro','LoginController@registro');

Route::group(['middleware' => 'auth'], function () {
Route::get('/','LoginController@index2');
Route::get('pacientes','LoginController@index3');
Route::get('diagnostico','LoginController@index4');
});