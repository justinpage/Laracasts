<?php

Route::resource('sessions', 'SessionsController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('password_resets/reset/{token}', 'PasswordResetController@getReset');
Route::post('password_resets/reset/{token}', 'PasswordResetController@postReset');
Route::get('password_resets/remind', ['as' => 'password_resets.getRemind', 'uses' => 'PasswordResetController@getRemind']);
Route::post('password_resets/remind', ['as' => 'password_resets.postRemind', 'uses' => 'PasswordResetController@postRemind']);

Route::resource('password_resets', 'PasswordResetController');


Route::get('admin', function()
{
	return 'Admin Page. Welcome ' . Auth::user()->username;
})->before('auth');

