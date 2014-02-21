<?php

// add the dependancy to make and use the name space
use Acme\Services\Validation\LessonValidator as Validator;

class LessonsController extends BaseController {

	protected $validator;

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('lessons.index');
	}

	/**
		* Show the form for creating a new resource.
		*
		* @return Response
	 */
	public function create()
	{
		return View::make('lessons.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if( ! $this->validator->validate(Input::all()))
		{
			return Redirect::back()->withErrors($this->validator->errors())->withInput();
		}



		// mass assignment vulnability
		// anti-pattern
		// $input = Input::all();
		//
		$input = Input::all();
		Lesson::create($input);

		return Redirect::route('lessons.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('lessons.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('lessons.edit');
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
