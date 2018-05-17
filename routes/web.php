x<?php


use Illuminate\Http\Request;

Route::get('/', function () {
	return view('home');
});


Route::get('/home', 'HomeController@index')->name('home');

//Servicios
Route::get('/servicio', 'ServicioController@index');
Route::get('/servicio/create', 'ServicioController@create');
Route::get('/servicio/{id_servicio}/edit', 'ServicioController@edit');
Route::post('/servicio', 'ServicioController@store');
Route::patch('/servicio/{id_servicio}', 'ServicioController@update');
Route::delete('/servicio/{id_servicio}', 'ServicioController@delete');

//Lavadores
Route::get('/lavador', 'LavadorController@index');
Route::get('/lavador/create', 'LavadorController@create');
Route::get('/lavador/{id_lavador}/edit', 'LavadorController@edit');
Route::post('/lavador', 'LavadorController@store');
Route::delete('/lavador/{id_lavador}', 'LavadorController@delete');
Route::patch('/lavador/{id_lavador}', 'LavadorController@update');