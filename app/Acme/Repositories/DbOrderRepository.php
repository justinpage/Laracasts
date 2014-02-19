<?php namespace Acme\Repositories;

use Order;

class DbOrderRepository implements OrderRepositoryInterface {
	public function getAll()
	{
		return Order::all();
	}

	public function find($id)
	{
		return Order::findOrFail($id);
	}
}
