@custombehattests @customsearchstudent
Feature: Look for students
  In order to check information on students I need to search for them

 Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | AStudent | AStudent  | A | aStudent1@example.com |
      | BStudent | BStudent | B | bStudent1@example.com |
      | CStudent | CStudent | C | cStudent1@example.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | Course 1 | C1 | topics |
    And the following "course enrolments" exist:
      | user | course | role |
      | AStudent | C1 |student |
      | BStudent | C1 |student |
      | CStudent | C1 |student |
    And I log in as "admin"
    And I change window size to "large"

    @javascript
    Scenario: Check students beginning with A with myFunc
      When I am on "Course 1" course homepage
      And I navigate to course participants
      And I check the students with firstname beginning with "A"
      Then I should see "AStudent"
      And I should not see "BStudent"

    @javascript
    Scenario: Check students beginning with A with myFunc
    When I am on "Course 1" course homepage
    And I navigate to course participants
    And I check the students with lastname beginning with "B"
    Then I should see "BStudent"
    And I should not see "AStudent"