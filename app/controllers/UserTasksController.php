<?php

class UserTasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /usertasks
	 *
	 * @return Response
	 */
	public function index($username)
	{
		$tasks = Task::byUsername($username);
		return View::make('tasks.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /usertasks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /usertasks
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /usertasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username, $taskId)
	{
		$task = Task::find($taskId, $username);
		return View::make('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /usertasks/{id}/edit
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
	 * PUT /usertasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username, $taskId)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /usertasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
