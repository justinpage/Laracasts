<?php

Route::get('/', ['as' => 'home', 'uses' => 'SupportController@index']);

Route::get('support/create', 'SupportController@create');
Route::post('support/store', 'SupportController@store');

/* Route::resource('support', 'SupportController', ['only' => ['create', 'store']]); */
