<?php

Route::get('/', function()
{
	$lesson = Lesson::first();

	$lesson->tags()->attach(2);

	return $lesson->tags;

	// $lesson = Lesson::find(1);
	// $tag = Tag::find(1);
	//
	// return $tag->lessons;

	/* return $lesson->tags; */
	// alternatively, return $lessons->tags()->get(); if you want to continue changing.
});
