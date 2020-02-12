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

Route::get('prueba/{name}', 'PruebaController@prueba');

Route::resource('trainers', 'TrainerController' );


Route::get('/mi_primer_ruta', function(){
	return'hola mundo. la prueba 1';
});

Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = 'apellido'){
	return 'hola que tal '.$name . $lastname;
});
