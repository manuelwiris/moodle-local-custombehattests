@custombehattests @customlogin
Feature: Simple Login
  In order to interact with moodle
  I need to log in

  @javascript
  Scenario: Log in with the predefined admin user
    Given I log in as "admin"
    And I change window size to "large"
    Then I should see "You are logged in as Admin User" in the "page-footer" "region"

  @javascript
  Scenario: Log in as an existing admin user filling the form and checked I'm logged
    Given the following "users" exist:
      | username | password | firstname | lastname | email |
      | testuser | testuser | Test | User | moodle@example.com |
    And I am on site homepage
    When I follow "Log in"
    And I set the field "Username" to "testuser"
    And I set the field "Password" to "testuser"
    And I press "Log in"
    Then I should see "You are logged in as" in the "page-footer" "region"

  @javascript
  Scenario: Log in as an unexisting user filling the form and check login fails
    Given the following "users" exist:
      | username | password | firstname | lastname | email |
      | testuser | testuser | Test | User | moodle@example.com |
    And I am on site homepage
    When I follow "Log in"
    And I set the field "Username" to "testuser"
    And I set the field "Password" to "unexisting"
    And I press "Log in"
    Then I should see "Invalid login, please try again"

  @javascript
  Scenario: Log in and log out
    Given I log in as "admin"
    When I log out
    Then I should see "You are not logged in" in the "page-footer" "region"
