<?php

class Library implements IteratorAggregate, Countable {
	protected $books;

	function __construct(array $books)
	{
		$this->books = $books;
	}

	public function getIterator()
	{
		return new ArrayIterator($this->books);
	}

	public function count()
	{
		return count($this->books);
	}
}

class Book {
	protected $title;

	function __construct($title)
	{
		$this->title = $title;
	}

	function getBookTitle()
	{
		return $this->title;
	}
}

$books[] = new Book('Book one');
$books[] = new Book('Book two');
$books[] = new Book('Book three');

$lib = new Library($books);

foreach ($lib as $book) {
	echo $book->getBookTitle() . PHP_EOL;
}

echo "Total Books: " . $lib->count() . PHP_EOL;
