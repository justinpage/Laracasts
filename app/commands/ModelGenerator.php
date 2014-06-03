<?php

use Illuminate\Filesystem\Filesystem;

class ModelGenerator
{
	protected $file;

	public function __construct(Filesystem $file)
	{
		$this->file = $file;
	}

	public function make($model, $path)
	{
		$path = "$path/" . ucwords($model) . ".php";
		$template = $this->getTemplate($model);

		$this->file->put($path, $template);
	}

	public function getTemplate($name)
	{
		$template = $this->file->get(__DIR__.'/templates/model.txt');


		return str_replace('{{NAME}}', $name, $template);


	}
}
