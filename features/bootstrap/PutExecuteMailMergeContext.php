<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:25
 */

use Behat\Behat\Context\Context;

class PutExecuteMailMergeContext implements Context
{
    /**
     * @Given /^I have specified a template file (.*) in request$/
     */
    public function iHaveSpecifiedATemplateFileInRequest($TemplateName)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I execute mail merge online$/
     */
    public function iExecuteMailMergeOnline()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}