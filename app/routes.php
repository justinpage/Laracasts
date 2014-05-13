<?php

Route::get('/', 'PagesController@getHome');
Route::get('about', 'PagesController@getAbout');

Route::controller('pages', 'PagesController');


