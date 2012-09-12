Feature: Test the string calculator
  In order to test the string calculator
  As a developer
  We need to excercise its functionality

Scenario: Adding an empty string returns zero
  Given there is a string calculator to test
  When I add an empty string
  Then I expect it to return zero