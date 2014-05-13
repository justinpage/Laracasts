<?php namespace Acme\Composers;

use Acme\Repositories\FlatTagRepository;
// view model for composing data for our side bar
class SideBarComposer {

	protected $tag;

	public function __construct(FlatTagRepository $tag)
	{
		$this->tag = $tag;
	}

	public function compose($view)
	{
		$view->with('tags', $this->tag->getAll());
	}
}
