<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//
require_once __DIR__ . '/../../../StringCalculator.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->sc = new StringCalculator;
    }

    /**
     * @Given /^there is a string calculator to test$/
     */
    public function thereIsAStringCalculatorToTest()
    {
        if (is_object($this->sc) !== TRUE) {
            throw new Exception("We don't have a string calculator to test.");
        }
    }

    /**
     * @When /^I add an empty string$/
     */
    public function iAddAnEmptyString()
    {
        $this->result = $this->sc->add('');
    }

    /**
     * @Then /^I expect it to return zero$/
     */
    public function iExpectItToReturnZero()
    {
        if ($this->result !== 0) {
            throw new Exception('Adding an empty string returns a ' . gettype($this->result));
        }
    }
}