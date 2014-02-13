<?php

App::bind('Acme\Repositories\OrderRepositoryInterface', 'Acme\Repositories\DbOrderRepository');

Route::resource('orders', 'OrdersController');
// class Foo {
// 	protected $bar;
// 	protected $baz;
//
// 	public function __construct(Bar $bar, Baz $baz)
// 	{
// 		$this->bar = $bar;
// 		$this->baz = $baz;
// 	}
// }
//
// class Bar {}
//
// class Baz {}
//
// class Mock {}
//
// App::instance('Foo', new Mock);
//
// Route::get('/', function()
// {
// 	dd(App::make('Foo'));
// });
