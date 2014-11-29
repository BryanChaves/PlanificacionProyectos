<?php

Route::get('/', 'MainController@index');

Route::get('login', 'UserController@index');
Route::post('login', 'UserController@login');
Route::get('registro', 'UserController@create');
Route::post('registro', 'UserController@store');
Route::get('logout', 'UserController@logout');
Route::get('auth', 'UserController@isLogged');


Route::resource('Adquisiciones', 'AdquisicionController');
Route::post('Adquisiciones/{id}/update', 'AdquisicionController@update');
Route::get('Adquisiciones/{id}/delete', 'AdquisicionController@destroy');

Route::resource('Alcances', 'AlcanceController');
Route::post('Alcances/{id}/update', 'AlcanceController@update');
Route::get('Alcances/{id}/delete', 'AlcanceController@destroy');

Route::resource('Comunicaciones', 'ComunicacionController');
Route::post('Comunicaciones/{id}/update', 'ComunicacionController@update');
Route::get('Comunicaciones/{id}/delete', 'ComunicacionController@destroy');

Route::resource('Comunicaciones', 'ComunicacionController');
Route::post('Comunicaciones/{id}/update', 'ComunicacionController@update');
Route::get('Comunicaciones/{id}/delete', 'ComunicacionController@destroy');

Route::resource('Comunicacion_Interesados', 'Comunicacion_InteresadoController');
Route::post('Comunicacion_Interesados/{id}/update', 'Comunicacion_InteresadoController@update');
Route::get('Comunicacion_Interesados/{id}/delete', 'Comunicacion_InteresadoController@destroy');

Route::resource('Comunicacion_recursosHumanos', 'Comunicacion_recursoHumanoController');
Route::post('Comunicacion_recursosHumanos/{id}/update', 'Comunicacion_recursoHumanoController@update');
Route::get('Comunicacion_recursosHumanos/{id}/delete', 'Comunicacion_recursoHumanoController@destroy');

Route::resource('Costos', 'CostoController');
Route::post('Costos/{id}/update', 'CostoController@update');
Route::get('Costos/{id}/delete', 'CostoController@destroy');

Route::resource('Cronogramas', 'CronogramaController');
Route::post('Cronogramas/{id}/update', 'CronogramaController@update');
Route::get('Cronogramas/{id}/delete', 'CronogramaController@destroy');

Route::resource('Detalles', 'DetalleController');
Route::post('Detalles/{id}/update', 'DetalleController@update');
Route::get('Detalles/{id}/delete', 'DetalleController@destroy');

Route::resource('Interesados', 'InteresadoController');
Route::post('Interesados/{id}/update', 'InteresadoController@update');
Route::get('Interesados/{id}/delete', 'InteresadoController@destroy');

Route::resource('Proyectos', 'ProyectoController');
Route::post('Proyectos/{id}/update', 'ProyectoController@update');
Route::get('Proyectos/{id}/delete', 'ProyectoController@destroy');

Route::resource('Recursos_Humanos', 'Recurso_HumanoController');
Route::post('Recursos_Humanos/{id}/update', 'Recurso_HumanoController@update');
Route::get('Recursos_Humanos/{id}/delete', 'Recurso_HumanoController@destroy');

Route::resource('Riesgos', 'RiesgoController');
Route::post('Riesgos/{id}/update', 'RiesgoController@update');
Route::get('Riesgos/{id}/delete', 'RiesgoController@destroy');

Route::resource('Usuarios', 'UserController');
Route::post('Usuarios/{id}/update', 'UserController@update');
Route::get('Usuarios/{id}/delete', 'UserController@destroy');





