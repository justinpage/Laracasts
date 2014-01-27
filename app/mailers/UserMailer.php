<?php namespace Acme\Mailers;

use User;

class UserMailer extends Mailer {
	public function welcome(User $user)
	{
		$view = 'emails.welcome';
		$data = [];
		$subject = 'Welcome to Index!';

		return $this->sendTo($user, $subject, $view, $data);

	}

	public function cancellation()
	{
		$view = 'emails.cancel';
		$data = [];
		$subject = 'Sorry to see Index!';

		return $this->sendTo($user, $subject, $view, $data);
	}
}
