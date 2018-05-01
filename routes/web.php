<?php


use Illuminate\Http\Request;

Route::get('/', function () {
	return view('home');
});


Route::get('/home', 'HomeController@index')->name('home');