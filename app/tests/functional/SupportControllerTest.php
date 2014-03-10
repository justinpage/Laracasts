<?php

class SupportControllerTest extends TestCase {

	public function tearDown()
	{
		// inconsistencies if you don't do this!
		Mockery::close();
	}

	public function test_displays_form_to_submit_support_request()
	{
		$this->call('GET', 'support/create');

		$this->assertResponseOk();
	}

	public function test_submits_support_request_upon_form_submission()
	{
		$postData = [
			'email' => 'xjustinpagex@gmail.com',
			'body'  => 'Whatsup!'
		];

		Mail::shouldReceive('queue')->once()
			->with('emails.support', $postData, Mockery::on(function($closure) {
				$message = Mockery::mock('Illuminate\Mailer\Message');

				$message->shouldReceive('to')
					->with('tickets@laracasts.uservoice.com') // or store this in config file
					->once()
					->andReturn(Mockery::self());

				$message->shouldReceive('subject')
					->with('Support Request')
					->once();

				$closure($message);

				return true;
			}));

		$this->call('POST', 'support/store', $postData);

		$this->assertRedirectedToRoute('home', null, ['flash_message']);
	}
}
