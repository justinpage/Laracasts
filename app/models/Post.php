<?php

class Post extends \Eloquent {
	protected $fillable = [];

	public function scopeSearch($query, $search)
	{
		return $query->where('title', 'LIKE', "%$search%");
	}
}
