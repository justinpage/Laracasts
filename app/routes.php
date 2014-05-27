<?php

Route::resource('sessions', 'SessionsController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');


Route::get('admin', function()
{
	return 'Admin Page. Welcome ' . Auth::user()->username;
})->before('auth');

// Redirect::guest() redirects a user so they can login
// Redirect::intended('/') will then save the intended path,
// add one if you need that extra security for extra measure
