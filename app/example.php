<?php

class Library {
	function __construct(array $books)
	{
		$this->books = $books;
	}

}

class Book {

}

$books[] = new Book('Book one');
$books[] = new Book('Book two');
$books[] = new Book('Book three');

$lib = new Library($books);

foreach ($lib as $book) {
	var_dump($book);
}
