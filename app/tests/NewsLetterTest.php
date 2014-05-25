<?php

class Curl {
	public function post()
	{
		return 'post request was made';
	}
}

class Newsletter {

	protected $curl;
	public function __construct(Curl $curl) {
		$this->curl = $curl;
	}
	public function addToList($listName)
	{
		$data = [
			'email' => 'foo@bar.com',
			'list'  => $listName
		];

		return $this->curl->post($data);
	}
}

class testNewsletter extends TestCase {

	public function tearDown()
	{
		Mockery::close();
	}

	public function test_adds_user_to_newsletter()
	{
		// arrange
		$curl = Mockery::mock('Curl');
		$curl->shouldReceive('post')->once()->andReturn('mocked');

		// act
		$newsletter = new Newsletter($curl);
		$result = $newsletter->addToList('foo-list');

		// assert
		$this->assertEquals('mocked', $result);
	}

}
