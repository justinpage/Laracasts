<?php

class PagesController extends BaseController
{
	public function getHome()
	{
		return View::make('home');
	}

	public function getAbout()
	{
		return View::make('about');
	}
}
