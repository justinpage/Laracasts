<?php namespace Acme\Repositories;

use Post;

class DbPostRepository {
	public function search($query)
	{
		return Post::where('title', 'LIKE', "%$query%")
			->orderBy('created_at', 'desc')
			->get();
	}
	public function getAll()
	{
		return Post::orderBy('created_at', 'desc')->get();
	}

}
