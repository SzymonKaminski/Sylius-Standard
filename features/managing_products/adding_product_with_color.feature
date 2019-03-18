@managing_products @product_color
Feature: Adding a new product with color
  In order to precisely describe new product
  As an Administrator
  I want to set its color when adding it

  Background:
    Given the store operates on a single channel in "United States"
    And I am logged in as an administrator

  @ui @javascript
  Scenario: Adding a new simple product with color
    When I want to create a new simple product
    When I specify its code as "MUG_NIHIL"
    And I name it "Mug nihil" in "English (United States)"
    And I set its color to "green"
    And I add it
    Then I should be notified that it has been successfully created
