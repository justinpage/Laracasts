<?php

class Episode extends \Eloquent {
	protected $fillable = [];

	public function comments()
	{
		return $this->morphMany('Comment', 'commentable');
	}
}
