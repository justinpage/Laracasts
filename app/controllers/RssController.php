<?php

class RssController extends BaseController {

	public function index()
	{
		$data['lessons'] = 'hello';//Laracasts\Lesson::orderBy('published_at', 'desc')->limit(10)->get();

		return Response::view('rss', $data, 200, [
			'Content-Type' => 'application/atom+xml; charset=UTF-8',
		]);
	}
}
