<?php

Route::get('/', function()
{
	$user = User::first();

	return View::make('home')->withUser($user);
});

