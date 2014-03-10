<?php

class SupportController extends \BaseController {

	public function index()
	{
		return 'Welcome!';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('support.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// get the post data
		// send email to tickets@laracasts.uservoice.com

		// you may want to abstract the mailer call to it's own dependency

		Mail::queue('emails.support', Input::all(), function($message)
		{
			$message->to('tickets@laracasts.uservoice.com')->subject('Support Request');
		});

		return Redirect::home()->with('flash_message', 'Thank you your support request. I will be in touch');
	}
}
