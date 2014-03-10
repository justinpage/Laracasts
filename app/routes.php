<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('about', 'PagesController@getAbout');

Route::controller('pages', 'PagesController');


Route::post('buy', function()
{
	return Redirect::home()->with('flash_message', 'Foo');
});

