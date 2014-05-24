<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RootCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'remote:doit';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create file on server as proof of concept.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		// you may pull origin master
		// or php artisan your custom command and so on
		SSH::into('production')->run([
			'cd htdocs',
			'touch finished.txt'
		]);

		$this->info('All done!');
	}
}
