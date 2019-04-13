<?php
Route::get('/', function () {return view('menu');});

Route::get('/pieces', 'PiecesController@form');
Route::post('/pieces', 'PiecesController@results');
Route::get('/pieces/{id}', 'PiecesController@details');
Route::post('/pieces/{id}', 'PiecesController@delete');
Route::get('/piece/add', 'PiecesController@add');
Route::post('/piece/add', 'PiecesController@store');
Route::get('/pieces/edit/{id}', 'PiecesController@edit');
Route::post('pieces/edit/{id}', 'PiecesController@update');

Route::get('/concerts', 'ConcertsController@index');
Route::get('/concerts/add', 'ConcertsController@add');
Route::post('/concerts/add', 'ConcertsController@store');
Route::get('/concerts/{id}', 'ConcertsController@program');
Route::get('/concerts/edit/{id}', 'ConcertsController@add');
Route::post('/concerts/edit/{id}', 'ConcertsController@store');
Route::post('/concerts/delete/{id}', 'ConcertsController@delete');