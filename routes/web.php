<?php
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/index', function () {return view('menu');});

Route::get('/pieces', 'PiecesController@form');
Route::post('/pieces', 'PiecesController@results');
Route::get('/pieces/{id}', 'PiecesController@details');
Route::post('/pieces/{id}', 'PiecesController@delete');
Route::get('/piece/add', 'PiecesController@add');
Route::post('/piece/add', 'PiecesController@store');
Route::get('/piece/edit/{id}', 'PiecesController@edit');
Route::post('piece/edit/{id}', 'PiecesController@update');

Route::get('/concerts', 'ConcertsController@index');
Route::get('/concerts/{id}', 'ConcertsController@program');
Route::post('/concerts/{id}', 'ConcertsController@delete');
Route::get('/concerts/add', 'ConcertsController@add');
Route::post('/concerts/add', 'ConcertsController@store');
Route::get('/concerts/delete/{id}', 'ConcertsController@confirm');
Route::post('/concerts/delete/{id}', 'ConcertsController@delete');