<?php

use \Order;

class OrdersTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		// Empty the current Orders table
		Order::truncate();

		Order::create([
			'title' => 'Xbox One',
			'image' => 'images/orders/xbox-one.jpg',
			'price' => 499,
			'description' => 'Newest game console from Microsoft'
		]);

		Order::create([
			'title' => 'Playstation 4',
			'image' => 'images/orders/playstation-4.jpg',
			'price' => 399,
			'description' => 'Newest game console from Sony'
		]);

		Order::create([
			'title' => 'Wii U',
			'image' => 'images/orders/wii-u.jpg',
			'price' => 299,
			'description' => 'Newest game console from Nintendo'
		]);
	}
}
