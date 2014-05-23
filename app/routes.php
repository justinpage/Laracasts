<?php

// // saving listner
// Order::saving(function($model)
// {
// 	// could return false if you don't want someone
// 	// touching a database
// 	return $model->validate();
// });

Route::get('/', function()
{
	/* Order::create(['title' => '']); */
	$order = new Order(['title' => 'Wii U']);

	if (! $order->save()) {
		dd($order->errors);
	}

	return 'success';
});

