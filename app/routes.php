<?php

Route::get('/', ['as' => 'home', function()
{
	return View::make('hello');

}]);

Route::get('profile', function()
{
	return "Welcome. Your email address is " . Auth::user()->email;
})->before('auth');

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);

