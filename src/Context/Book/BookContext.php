<?php

namespace Context\Book;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

class BookContext implements Context
{

    /**
     * @When I browse the :arg1 channel
     */
    public function iBrowseTheChannel($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should shop using the :arg1 currency
     */
    public function iShouldShopUsingTheCurrency($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should be able to shop using the :arg1 currency
     */
    public function iShouldBeAbleToShopUsingTheCurrency($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should not be able to shop using the :arg1 currency
     */
    public function iShouldNotBeAbleToShopUsingTheCurrency($arg1)
    {
        throw new PendingException();
    }
}
