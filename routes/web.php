<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('hist/{nome}', 'HistoricoController@index');


Route::get('user', 'ResultadoController@index');

