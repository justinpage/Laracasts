<?php

// Event::listen('illuminate.query', function($query)
// {
// 	var_dump($query);
// });
//

// http://yoursite.com/tasks
// http://yoursite.com/john/task <--- task associated with john

// the higher up a call is, the more it will take precedence

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UserTasksController@index');
Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);

// Route::get('{username}/task', function($username)
// {
// 	// find user by their username from the users table
// 	$user = User::whereUsername($username)->first();
//
// 	// get all task associated with that user
// 	return $user->tasks;
//
// 	// return items
//
//
// });
//
// Route::get('{username}/tasks/{id}', function($username, $id)
// {
// 	// find the task by its id
// 	// with tackles n+1 problem with eager loading
// 	$user = User::whereUsername($username)->first();
// 	$task = $user->tasks()->where('id', $id)->first();
//
// 	// and load a view to display it
// 	return View::make('tasks.show', compact('user', 'task'));
// });
//
