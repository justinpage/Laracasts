<?php

Route::get('guests', ['as' => 'guests.index', function()
{
	$guests = Guest::all();
	return View::make('guests.index', compact('guests'));
}]);


Route::get('guests/create', ['as' => 'guests.create',function()
{
	return View::make('guests.create');
}]);

Route::post('guests', ['as' => 'guests.store', function()
{
	$validator = Validator::make(Input::all(), ['name' => 'required', 'message' => 'required']);

	if($validator->fails()) return Redirect::back()->withFlashMessage('Please fill out both inputs.');

	Guest::create([
		'name'    => Input::get('name'),
		'message' => Input::get('message')
	]);

	return Redirect::route('guests.index');
}]);

