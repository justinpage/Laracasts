<?php namespace Acme\Services\Validation;

class LessonValidator extends Validator {
	static $rules = [
		'title'     => 'required',
		'body'      => 'required',
		'video_src' => 'required',
	];
}
