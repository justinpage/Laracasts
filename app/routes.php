<?php

Route::resource('sessions', 'SessionsController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');


Route::get('admin', function()
{
	return 'Admin Page. Welcome ' . Auth::user()->username;
})->before('auth');

