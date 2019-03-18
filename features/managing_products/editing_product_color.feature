@managing_products @product_color
Feature: Editing product's color
  In order to modify product details
  As an Administrator
  I want to be able to edit product's color

  Background:
    Given the store operates on a single channel in "United States"
    And I am logged in as an administrator

  @ui @javascript
  Scenario: Changing color of product
    Given the store has a product "Mug nihil"
    When I want to modify this product
    And I set its color to "red"
    And I save my changes
    Then this product should have color set to "red"
