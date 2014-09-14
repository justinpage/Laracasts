<?php

use \User;

class UsersTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		// Empty the current Users table
		User::truncate();

		User::create([
			'username' => 'JustinPage',
			'password' => Hash::make('1234'),
			'email' => 'xjustinpagex@gmail.com',
		]);

		User::create([
			'username' => 'JeffPage',
			'password' => Hash::make('1234'),
			'email' => 'jeffpage@gmail.com',
		]);

		User::create([
			'username' => 'BobPage',
			'password' => Hash::make('1234'),
			'email' => 'bobpage@gmail.com',
		]);
	}
}
