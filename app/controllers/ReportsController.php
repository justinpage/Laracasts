<?php

class ReportsController extends \BaseController {

	public function daily()
	{
		$daily = DailyReports::all();

		return View::make('admin.reports.daily')
			->with('dates',	$daily->lists('date'))
			->with('totals', $daily->lists('amount'));
	}
}
