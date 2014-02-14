<?php namespace Acme\Handlers;

class UserEventHandler {

	public function onCancel()
	{
		dd('Operation related to user cancellation');
	}

	public function onSignUp()
	{
		dd('Operation related to user creation');
	}

	public function subscribe($events)
	{
		$events->listen('user.cancel', 'Acme\Handlers\UserEventHandler@onCancel');
		$events->listen('user.signup', 'Acme\Handlers\UserEventHandler@onSignUp');
	}
}


