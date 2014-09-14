<?php

Route::get('/', function()
{
	$users = User::all();

	return View::make('home')->with('users', new
		Acme\Presenters\PresenterCollection('Acme\Presenters\UserPresenter', $users));
});

