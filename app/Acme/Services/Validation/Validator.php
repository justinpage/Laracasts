<?php namespace Acme\Services\Validation;

use Validator as V;

abstract class Validator {
	
	protected $errors;

	public function validate($input) 
	{
		$validator = V::make($input, static::$rules);

		if ($validator->fails())
		{
			$this->errors = $validator->messages();

			return false;
		}

		return true;
	}	

	public function errors() 
	{
		return $this->errors;
	}
}
