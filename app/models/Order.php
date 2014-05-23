<?php

class Order extends \Eloquent {

	protected $guarded = ['id'];
	protected $fillable = [];

	public $errors;

	protected static $rules = [
		'title' => 'required'
	];

	public function validate()
	{
		$v = Validator::make($this->getAttributes(), static::$rules);

		if($v->fails()) {
			$this->errors = $v->messages();
			return false;
		}

		return true;
	}

	public static function boot()
	{
		parent::boot();

		// fires if you are saving or updating
		static::saving(function($model)
		{
			return $model->validate();
		});
	}
}
