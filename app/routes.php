<?php

Route::get('posts', function()
{
	return View::make('home')->withPosts(Post::all());	
});




