<?php

Route::get('/', function()
{

	// DB::table('lesson_tag')->insert([
	// 	['lesson_id' => 1, 'tag_id' => 1],
	// 	['lesson_id' => 1, 'tag_id' => 2],
	// 	['lesson_id' => 1, 'tag_id' => 3],
	// 	['lesson_id' => 2, 'tag_id' => 1],
	// 	['lesson_id' => 2, 'tag_id' => 3],
	// ]);
    //
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
