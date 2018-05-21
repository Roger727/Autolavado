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

//Productos
Route::get('/producto', 'ProductoController@index');
Route::get('/producto/create', 'ProductoController@create');
Route::get('/producto/{id_producto}/edit', 'ProductoController@edit');
Route::post('/producto', 'ProductoController@store');
Route::delete('/producto/{id_producto}', 'ProductoController@delete');
Route::patch('/producto/{id_producto}', 'ProductoController@update');

//Proveedores
Route::get('/proveedor', 'ProveedorController@index');
Route::get('/proveedor/create', 'ProveedorController@create');
Route::get('/proveedor/{id_proveedor}/edit', 'ProveedorController@edit');
Route::post('/proveedor', 'ProveedorController@store');
Route::delete('/proveedor/{id_proveedor}', 'ProveedorController@delete');
Route::patch('/proveedor/{id_proveedor}', 'ProveedorController@update');

//Registro Diario
Route::get('/auto', 'AutomovilController@index');
Route::get('/auto/create', 'AutomovilController@create');
Route::get('/auto/{id_proveedor}/edit', 'AutomovilController@edit');
Route::post('/auto', 'AutomovilController@store');
Route::delete('/auto/{id_proveedor}', 'AutomovilController@delete');
Route::patch('/auto/{id_proveedor}', 'AutomovilController@update');
Route::get('/auto/{id_proveedor}/pago', 'AutomovilController@pago');