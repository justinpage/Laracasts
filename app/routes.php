<?php



Route::get('/', function()
{
	Event::fire('user.signup');
});

// Event::listen('user.signup', function(User $user)
// {
// 	// subscribe user to Mailchimp list
// 	var_dump($user->toArray());
// });
//
// Route::get('/', function()
// {
// 	$user = User::first();
// 	Event::fire('user.signup', $user);
//
// 	return 'fired';
// });
