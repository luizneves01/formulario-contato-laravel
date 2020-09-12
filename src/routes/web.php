<?php

Route::group(['namespace' => 'LuizNeves01\FormularioContato\Http\Controllers'], function(){
    Route::get('contato', 'FormularioContatoController@index');
    Route::post('contato', 'FormularioContatoController@enviarEmail')->name('contato');
});