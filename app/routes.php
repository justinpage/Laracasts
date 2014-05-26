<?php

// Route::get('/pages/home', 'PagesController@home');
// Route::get('/pages/about', 'PagesController@about');
//
/*  Route::controller('pages', 'PagesController');  // not restful controller */
Route::get('pages/about', ['as' => 'pages.about', 'uses' => 'PagesController@about']);
Route::resource('pages', 'PagesController'); // resourceful




