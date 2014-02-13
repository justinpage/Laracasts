<?php namespace Acme\Repositories;

class DbOrderRepository implements OrderRepositoryInterface {
	public function getAll()
	{
		return 'Getting all from mySQL';
	}
}
