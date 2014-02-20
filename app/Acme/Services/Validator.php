<?php namespace Acme\Services;

use Validator as V;

class Validator {
	
	protected $errors;

	public function validate($input, $rules) 
	{
		$validator = V::make($input, $rules);

		if ($validator->fails())
		{
			$this->errors = $validator->message();

			return false;
		}

		return true;
	}	

	public function errors() 
	{
		return $this->errors;
	}
}
