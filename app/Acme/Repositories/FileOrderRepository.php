<?php namespace Acme\Repositories;

use Order;

class FileOrderRepository implements OrderRepositoryInterface {
	public function getAll()
	{
		return 'get all from the file system';
	}

	public function find($id)
	{
		return 'find with file driver';
	}
}
