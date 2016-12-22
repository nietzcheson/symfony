@book
Feature: Book
  In order to see right prices
  As a Customer
  I want to browse channels with a valid currency only

  @ui
  Scenario: Showing currencies only from the current channel
    When I browse the "Mobile" channel
    Then I should shop using the "USD" currency
    And I should be able to shop using the "GBP" currency
    And I should not be able to shop using the "EUR" currency
