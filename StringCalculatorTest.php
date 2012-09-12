<?php

/**
 * @file
 * String calculator tests.
 */

require_once 'StringCalculator.php';

class StringCalculatorTest extends PHPUnit_Framework_TestCase {
  protected $sc;

  protected function setUp() {
    $this->sc = new StringCalculator;
  }

  public function testEmptyStringReturnsZero() {
    $this->assertSame(0, $this->sc->add(''), 'An empty string returns zero.');
  }
}
