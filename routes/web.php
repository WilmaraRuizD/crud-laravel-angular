<?php

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/clientes','ClientesController@index') ;
//Route::get('/clientes/create','ClientesController@create');

Route::resource('clientes','ClientesController')->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
