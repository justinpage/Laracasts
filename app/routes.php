<?php

Route::get('posts', function()
{
	$query = Request::get('q');
	$repo = App::make('Acme\Repositories\DbPostRepository');

	// $posts = $query
	// 	? Post::search($query)->get()
	// 	: Post::all();

	$posts = $query
		? $repo->search($query)
		: $repo->getAll();

	return View::make('home')->withPosts($posts);
});




