@custombehattests @customfilter
Feature: Turn filter on
  To use a filter I need to turn it on

  Background:
    Given I log in as "admin"
    And I change window size to "large"
    And the following config values are set as admin:
    | config | value | plugin |
    | toolbar | custom = html, wiris | editor_atto |
    And I navigate to "Plugins" in site administration
    And I click on "Manage filters" "link"

  @javascript
  Scenario: Turn filter on using moodle methods
    When I click on "On" "option" in the "MathType by WIRIS" "table_row"
    And I open my profile in edit mode
    And I click on "HTML" "button"
    And I set the field "Description" to "<math><mfrac><mn>1</mn><mn>2</mn></mfrac></math>"
    And I click on "HTML" "button"
    Then "//img[@alt='1 half']" "xpath_element" should exist

      @javascript
  Scenario: Turn filter on using custom methods
    When I turn filter on "MathType by WIRIS"
    And I open my profile in edit mode
    And I click on "HTML" "button"
    And I set the field "Description" to mathml "1 half"
    And I click on "HTML" "button"
    Then I should see MathType image "1 half"






