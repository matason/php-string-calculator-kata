<?php

/**
 * @file
 * Class extends PHPUnit_Framework_TestCase, sets up the String Calculator.
 */

require_once 'StringCalculator.php';

class StringCalculatorFrameworkTestCase extends PHPUnit_Framework_TestCase {

  /**
   * Holds an instance of the String Calculator.
   *
   * @var object
   */
  protected $stringCalculator;

  protected function setUp() {
    $this->stringCalculator = new StringCalculator;
  }
}