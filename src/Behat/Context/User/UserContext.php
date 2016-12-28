<?php

namespace Behat\Context\User;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

class UserContext implements Context{
    /**
     * @Given I am logged in as an administrator
     */
    public function iAmLoggedInAsAnAdministrator()
    {
        throw new PendingException();
    }

    /**
     * @When I want to add a new country
     */
    public function iWantToAddANewCountry()
    {
        throw new PendingException();
    }

    /**
     * @When I choose :arg1
     */
    public function iChoose($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I add it
     */
    public function iAddIt()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be notified that it has been successfully created
     */
    public function iShouldBeNotifiedThatItHasBeenSuccessfullyCreated()
    {
        throw new PendingException();
    }

    /**
     * @Then the country :arg1 should appear in the store
     */
    public function theCountryShouldAppearInTheStore($arg1)
    {
        throw new PendingException();
    }
}
