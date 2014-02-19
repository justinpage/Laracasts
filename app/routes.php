<?php
Route::resource('orders', 'OrdersController');

App::bind('Acme\Repositories\OrderRepositoryInterface', 'Acme\Repositories\DbOrderRepository');
