<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:25
 */

use Behat\Behat\Context\Context;

class PutExecuteTemplateContext implements Context
{
    /**
     * @When /^I execute template online$/
     */
    public function iExecuteTemplateOnline()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified a cleanup option (.*)$/
     */
    public function iHaveSpecifiedACleanupOption($Cleanup)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}