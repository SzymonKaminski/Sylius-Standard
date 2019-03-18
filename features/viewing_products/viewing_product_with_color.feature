@viewing_products @product_color
Feature: Viewing product's color
  In order to know color of the product
  As a Customer
  I want to read product's color

  Background:
    Given the store operates on a single channel in "United States"
    And the store has a product "Mug nihil"
    And this product has color set to "green"
    And the store has customer "J.R.R Tolkien" with email "jrr.tolkien@middle-earth.com"
    And I am a logged in customer

  @ui
  Scenario: Viewing product's color
    When I view product "Mug nihil"
    Then I should see "green" as its color
