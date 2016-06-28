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
Route::get('pacientes',['as'=>'pacientes','uses'=>'PacienteController@index']);
Route::get('paciente/{id}','LoginController@index4');
Route::get('paciente/{id}/global','DiagnosticoController@index');
Route::get('paciente/{id}/cribaje','DiagnosticoController@index2');
Route::get('paciente/{id}/imc','DiagnosticoController@index3');
Route::get('paciente/{id}/circunferencia','DiagnosticoController@index4');
Route::post('paciente/{id}/diagnosticar','DiagnosticoController@store');
Route::post('paciente/{id}/diagnosticarimc','DiagnosticoController@imc');
Route::post('paciente/{id}/evaluacionglobal','DiagnosticoController@evaluacionglobal');
Route::post('paciente/{id}/diagnosticarcircunferencial','DiagnosticoController@circunferencial');
Route::post('registrarpaciente','PacienteController@store');
Route::get('paciente/resultado/{id}',['as'=>'paciente/resultado','uses'=>'DiagnosticoController@resultado']);
Route::get('paciente/{id}/dietaobe','DiagnosticoController@pdfobesidad');
Route::get('paciente/{id}/dietades','DiagnosticoController@pdfdesnutricion');
Route::get('paciente/{id}/dietanor','DiagnosticoController@pdfnormal');
});