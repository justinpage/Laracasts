<?php

class UsersController extends \BaseController {
	// a whole hell lot of logic that should not be in the store method
	// should be abstracted for Single Responsibility
	public function store()
	{
		$input = Input::all();

		// validation
		$validator = Validator::make($input, [
			'email' => 'required|email|unique',
			'password' => 'required|min:6'
		]);

		if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

		// persistance
		$user = User::create($input); // <--- guarded??

		// email
		Mail::send('emails.welcome', ['user' => $user], function($message) use ($user)
		{
			$mesage->to($user->email)->subject('Welcome Aboard');
		});

		$mailChimp = new MailChimp;
		$mailChimp->addToList('members', $user);

		Auth::login($user);

		return Redirect::home()->with('flash_message', 'You are now signed up!');
	}
}
