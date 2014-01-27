<?php

function lesson_tag_uri($lesson)
{

	$parsedUrl = parse_url(URL::route('lessons.show', $lesson->slug));

	$output[] = 'tag:';
	$output[] = $parsedUrl['host'] . ',';
	$output[] = $lesson->updated_at->format('Y-m-d') . ':';
	$output[] = $parsedUrl['path'];

	return implode('', $output);

}
