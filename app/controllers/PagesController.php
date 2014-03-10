<?php

class PagesController extends BaseController {
	public function index()
	{
		return 'Hi';
	}

	public function getAbout()
	{
		return View::make('about')->withTags(['foo', 'bar']);
	}
}
