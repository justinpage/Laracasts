<?php

class ReportsController extends \BaseController {

	public function daily()
	{
		return View::make('admin.reports.daily');
	}
}
