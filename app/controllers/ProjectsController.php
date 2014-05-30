<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::whereOwnerId(1)->get();

		return View::make('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
		// already, our controller is twenty lines long
		// also, you may start asking yourself how can i call this controller from another
		// stop and think to yourself that this is a code smell.
		$input = Input::all();

		// does this validation rules belong here, no!
		// can validation be used somewhere else inside your controller, yes!
		$validation = Validator::make($input, ['name' => 'required', 'description' => 'required', 'owner_id' => 'required']);

		if ($validation->fails()) {
			return Redirect::back()->withInput()->withErrors($errors);
		}

		$project = Project::create($input);

		$mailer = new UserMailer;
		$mailer->notify($project->owner, 'A new project has been created and assigned to you.');

		UserEvent::create([
			'user_id'     => $input['owner_id'],
			'type'        => 'admin',
			'description' => 'Created new project, ' . $input['name']
		]);

		return Redirect::route('projects.index');
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
