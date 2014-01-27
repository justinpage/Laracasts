<?php


Route::get('users/store', 'UsersController@store');
Route::resource('users', 'UsersController');
