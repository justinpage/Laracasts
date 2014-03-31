<?php

class UsersController extends \BaseController {
	// a whole hell lot of logic that should not be in the store method
	// should be abstracted for Single Responsibility
	public function store()
	{
		$input = Input::all();

		// validation
		// never place validation in your controller

		// dependency inject a instance of user
		if (! $this->user->isValidForCreation($input))
			return Redirect::back()->withErrors($this->user->getErrors())->withInput();

		$this->userCreator->make();

		// all the user Creator covers all this below

			// persistance
			// maybe its Eloquent or something else, the controller doesn't need to know
			/* $user = $this->repository->create($input); */

			// email
			/* $this->userMailer->welcome($user)->send(); */


			// Newsletter
			/* $this->newsletter->addToList('members', $user); */

		// this is ok to allow
		Auth::login($user);

		return Redirect::home()->with('flash_message', 'You are now signed up!');
	}
}

// this allows for testing. Now, we can mock the user creator!
// This makes this controller significantly easier to test
