<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::post('/tasks', 'TasksController@store');
Route::post('/tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);

Route::get('{username}', 'UserTasksController@index');
Route::get('{username}/tasks', 'UserTasksController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);
Route::resource('tasks', 'TasksController');


