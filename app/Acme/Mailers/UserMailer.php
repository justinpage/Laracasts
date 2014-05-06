<?php namespace Acme\Mailers;

class UserMailer
{
	public function welcome()
	{
		var_dump('welcome email to be sent!');
	}

	public function subscribe($events)
	{
		$events->listen('user.signup', 'Acme\Mailers\UserMailer@welcome');
	}
}
