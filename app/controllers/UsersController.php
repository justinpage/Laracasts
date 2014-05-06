<?php

class UsersController extends \BaseController {

	public function __construct()
	{
		Event::listen('user.signup', 'Acme\Mailers\UserMailer@welcome');
	}

	public function store()
	{
		Event::fire('user.signup');
		// $input = Input::all();
        //
		// if (! $this->user->isValidForCreation($input))
		// 	return Redirect::back()->withErrors($this->user->getErrors())->withInput();
        //
		// $this->repository->create($input);
        //
		// Auth::login($user);
        //
		// return Redirect::home()->with('flash_message', 'You are now signed up!');
	}
}

// this allows for testing. Now, we can mock the user creator!
// This makes this controller significantly easier to test
