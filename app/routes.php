<?php

Route::resource('users', 'UsersController');
Route::resource('users.questions', 'QuestionsController');

// always use post request behind the scenes
// most browsers don't support put/patch

// CREATE => POST
// READ   => GET
// UPDATE => PUT/PATCH
// DELETE => DELETE
