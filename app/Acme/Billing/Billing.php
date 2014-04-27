<?php namespace Acme\Billing;

use Acme\Utilities\Something;
// if you had a second file of the same name in
// a different file structure
use Acme\Services\Something as S;

use Mail;

class Billing {

	public function __construct()
	{
		/* Mail::send(); */
		dd(new Something);
	}
}
