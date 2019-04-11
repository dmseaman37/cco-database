<?php
Route::get('/', function () {return view('menu');});

Route::get('/pieces', 'PiecesController@form');
Route::post('/pieces', 'PiecesController@results');

Route::get('/pieces/{id}', 'PiecesController@details');

Route::get('/concerts', 'ConcertsController@index');
Route::get('/concerts/{id}', 'ConcertsController@program');