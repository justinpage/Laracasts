<?php

function gravatar_tag($email, $username)
{
	return "<img src='http://www.gravatar.com/avatar/" . md5($email) .
		"?s=40' alt='" . $username. "' />";
}

function link_to_task(Task $task)
{
	return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id]);
}
