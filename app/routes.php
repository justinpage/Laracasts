<?php

// http://yoursite.com/tasks
// http://yoursite.com/john/task <--- task associated with john

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

