<?php

class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function lessons()
	{
		return $this->belongsToMany('Lesson');
	}
}
