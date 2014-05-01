<?php

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		// empty out users table
		User::truncate();

		User::create([
			'username' => 'JustinPage',
			'email'    => 'xjustinpagex@gmail.com',
			'password' => '1234'
		]);

		User::create([
			'username' => 'StephanieRosales',
			'email'    => 'stephanie.annrosales@gmail.com',
			'password' => '1234'
		]);
	}
}
