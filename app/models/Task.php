<?php


class Task extends BaseModel {
	protected $guarded = ['id'];

	protected static $rules = [
		'title' => 'required',
		'body'  => 'required'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public static function find($id, $username = null)
	{
		$task = static::with('user')->find($id);

		if ($username and $task->user->username !== $username) {
			throw new Illuminate\Database\Eloquent\ModelNotFoundException;
		}

		return $task;
	}


	public static function byUsername($username)
	{
		return User::byUsername($username)->tasks;
	}
}
