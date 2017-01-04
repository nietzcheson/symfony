@article
Feature: Article
  In order to create articles
  As a customer
  I need to be able to put interesting articles

  @ui
  Scenario: Creating a single article
    Given there is a "Sith Lord Lightsaber", which costs £15
    When I add the "Sith Lord Lightsaber" to the basket
    Then I should have 1 product in the basket
    And the overall basket price should be £20