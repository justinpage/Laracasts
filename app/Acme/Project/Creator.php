<?php namespace Acme\Project;

use Validator;
use Project;

class Creator {

	protected $listener;

	public function __construct($listenr)
	{
		$this->listener = $listener;
	}

	public function create($input, Project::$rules)
	{
		// goal is to seperate HTTP layer from controller
		$validation = Validator::make($input, Project::$rules);

		if ($validation->fails()) {
			return	$this->listner->projectCreationFails($validation->messages());
		}

		$project = Project::create($input);

		// inject as a dependancy or resolve out of the IoC container
		// with App::make
		$mailer = App::make(UserMailer);
		$mailer->notify($project->owner, 'A new project has been created and assigned to you.');

		// using a repository?
		UserEvent::create([
			'user_id'     => $input['owner_id'],
			'type'        => 'admin',
			'description' => 'Created new project, ' . $input['name']
		]);

		return $this->listener->projectCreationSucceeds();
	}
}
