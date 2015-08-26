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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//rutas para el recurso Empresa
Route::resource('Empresa','EmpresaController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('Empresa/destroy/{id}', ['as' => 'Empresa/destroy', 'uses'=>'EmpresaController@destroy']);
//ruta para realizar busquedas de registros
Route::post('Empresa/search', ['as' =>'Empresa/search', 'uses'=>'EmpresaController@search']);