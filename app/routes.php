<?php

// Could go in app/filters.php
Route::filter('cache.fetch', 'Acme\Filters\CacheFilter@fetch');
Route::filter('cache.put', 'Acme\Filters\CacheFilter@put');



Route::get('tasks', function()
{
	/* Cache::put('foo', 'bar', 10); */
	// could do Cache::forever
	// could do Cache::forget
	// could do Cache::has for conditional testing
	/* return Cache::get('foo', 'default value'); */

	/* return Task::remember(60)->get(); */
	// prove that we won't return the original from the hour

	return 'whatsup!';
	return View::make('hello');
})->before('cache.fetch')->after('cache.put');

Event::listen('illuminate.query', function ($query)
{
	var_dump($query);
});

Route::get('test', function()
{
	return Task::remember(1)->get();
});

