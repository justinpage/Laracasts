<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use App\Repositories\UserEventRepositoryInterface;

class ClearHistoryCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'laracasts:clear-history';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Clear all user events in db';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	protected $events;

	public function __construct(UserEventRepositoryInterface $events)
	{
		$this->events = $events;
		parent::__construct();
	}

	// the following script would be in app/Acme/Repositories/DbUserEventRepository
	public function cleanUp() 
	{
		$oneMonth = Carbon::now()->subMonth();
		UserEvent::where('created_at', '<=', $oneMonth)->delete();
	}
	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->events->cleanUp(); 
		$this->info('Done, fool!');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			// array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
