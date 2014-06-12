<?php namespace Acme\Repositories;

class BackendServiceProvider extends ServiceProvider {
	protected function register()
	{
		$this->app->bind(
			'Acme\Repositories\UserRepositoryInterface',
			'Acme\Repositories\DbUserRepository'
		);
	}
}
