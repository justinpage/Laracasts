<?php

class PasswordResetController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 * GET /passwordreset/create
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('password_resets.remind');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /passwordreset
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		switch ($response = Password::remind(Input::only('email'), function($message)
		{
			$message->subject('Your Password Reminder');
		})) {
		case Password::INVALID_USER:
			return Redirect::back()->with('status', Lang::get($response));
		case Password::REMINDER_SENT:
			return Redirect::back()->with('status', Lang::get($response));
		}
	}

	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);
		return View::make('password_resets.reset')->withToken($token);
	}

	public function postReset()
	{
		$creds = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
		$response = Password::reset($creds, function($user, $password)
		{
			$user->password = Hash::make($password);
			$user->save();
		});

		switch ($response) {
			case PASSWORD::INVALID_PASSWORD:
			case PASSWORD::INVALID_TOKEN:
			case PASSWORD::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));
			case PASSWORD::PASSWORD_RESET:
				return Redirect::to('/login');
		}
	}

}
