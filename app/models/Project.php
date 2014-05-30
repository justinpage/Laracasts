<?php

class Project extends \Eloquent {
	protected $fillable = ['name', 'description', 'owner_id'];

	public static $rules = ['name' => 'required', 'description' => 'required', 'owner_id' => 'required'];
}
