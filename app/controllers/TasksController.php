<?php

/* use Acme\Services\TaskCreatorService; */

class TasksController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	// protected $taskCreator;
    //
	// public function __construct(TaskCreatorService $TaskCreator)
	// {
	// 	$this->taskCreator = $TaskCreator;
	// }

	/**
	 * Display a listing of the resource.
	 * GET /tasks
	 *
	 * @return Response
	 */
	public function index()
	{
		// fetch all tbarasks
		$tasks = Task::with('user')->get();
		$users = User::lists('username', 'id');

		// load a view to display them
		return View::make('tasks.index', compact('tasks', 'users'));

		// Eloquent, an ORM, offers clean Query builders
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tasks
	 *
	 * @return Response
	 */
	public function store()
	{

		$task = new Task(Input::all());
		if (! $task->save() ) {
			return Redirect::back()->withInput()->withErrors($task->getErrors());
		}
		// try {
		// 	$this->taskCreator->make(Input::all());
		// } catch (Acme\Validators\ValidationException $e) {
		// 	return Redirect::back()->withInput()->withErrors($e->getErrors());
		// }

		return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// fetch single task
		$task = Task::findOrFail($id);

		// load a view to display it
		return View::make('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tasks/{id}/edit
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
	 * PUT /tasks/{id}
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
	 * DELETE /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
