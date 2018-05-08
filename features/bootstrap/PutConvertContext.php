<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:07
 */

use Behat\Behat\Context\Context;

class PutConvertContext implements Context
{
    /**
     * @Given /^I have specified document (.*) to send it in request body$/
     */
    public function iHaveSpecifiedDocumentToSendItInRequestBody($DocName)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I execute conversion \(PUT convert\)$/
     */
    public function iExecuteConversionPUTConvert()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^There is no file (.*) on storage in output folder$/
     */
    public function thereIsNoFileOnStorageInOutputFolder($OutPath)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}