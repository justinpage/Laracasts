<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('store', 'OrdersController@store'); // temporary
Route::resource('orders', 'OrdersController');

