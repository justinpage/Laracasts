<?php

class PagesController extends BaseController
{
	public function getHome()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}
}
