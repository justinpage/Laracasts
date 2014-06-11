Feature: Guest Book
	In order to track my visitors
	As the site owner
	I want to give users the ability to sign the guest book

	Scenario: User fills out guest book form
		Given there are no guests
		Given I am on "guests/create"
		And I fill out the guest book
		Then I should see "Justin Page"
		And I should see "Your website kicks ass!"

	Scenario: User fills out guest bookf orm with invalid credentials
		Given I am on "guests/create"
		And I fill out the guest book incorrectly
		Then I should see "Please fill out both inputs."
