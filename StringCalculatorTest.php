<?php

/**
 * @file
 * String calculator tests.
 */

// Includes the file you would like to perform tests on
require_once 'StringCalculator.php';

class StringCalculatorTest extends PHPUnit_Framework_TestCase {
  protected $sc;
  protected function setUp() {
    $this->sc = new StringCalculator;
  }
  /**
   * String calculator tests.
   */
  protected function stringAdd($string) {
  	return $this->sc->add($string);
  }
  // 1. Will an empty string ('') return 0?
  // Tests are public methods that are named test*. 
  public function testEmptyStringReturnsZero() {
  	// $this->assertSame(mixed $expected, mixed $actual[, string $message = '']);
    $this->assertSame(0, $this->stringAdd(''), 'An empty string returns zero.');
  }
  // 2. Will 1 return 1?
  public function testSingleInputReturnsItself() {
    $this->assertSame(1, $this->stringAdd('1'), 'An empty string returns zero.');
  }
  // 4. Will 1+2 return 3?
  public function testInputsReturnsSum() {
    $this->assertSame(3, $this->stringAdd('0,1,2'), 'An empty string returns zero.');
  }
  // 3. We dont want numbers too large, will outputs over 1000 return 'I cant count that high!'?
  public function testInputNumerInRange() {
    $this->assertSame('I cant count that high!', $this->stringAdd('1000,1'), 'An empty string returns zero.');
  }
  // 5. Will an unknown number of inputs such as '1,1,3,5,10' return their sum?

  // 6. Will mixed delimiters such as 1\n2,3 still return as sum?

  // 7. Will negative numbers be dealt with correctly?

}
