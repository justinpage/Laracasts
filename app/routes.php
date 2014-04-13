<?php

// our way of saying that we want to bind it to an instance of bind Task
// laravel will find task by the index
Route::model('tasks', 'Task');

Route::resource('tasks', 'TasksController');

// route bind will override the instance
// Route::bind('task', function($value, $route)
// {
// 	// that value is equal tot he wild card in Route::get
// 	return Task::whereSlug($value)->first();
// });


// Route::get('tasks/{task}', function($task)
// {
// 	return $task;
// });

