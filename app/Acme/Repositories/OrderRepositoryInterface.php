<?php namespace Acme\Repositories;

interface OrderRepositoryInterface {
	public function getAll();

	public function find($id);
}
