<?php

Route::get('tasks/{task}', function($task)
{
	return Task::findOrFail($task);
});

