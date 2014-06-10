Feature: Guest Book
	In order to track my visitors
	As the site owner
	I want to give users the ability to sign the guest book

Scenario: User fills out guest book form
		Given I am on "guests/create"
		And I fill in "name" with "Justin Page"
		And I fill in "message" with "Your website kicks ass!" 
		And I press "Submit"
		Then I should see "Justin Page"
		And I should see "Your website kicks ass!"
