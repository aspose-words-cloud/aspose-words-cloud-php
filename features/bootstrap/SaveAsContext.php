<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:08
 */

use Behat\Behat\Context\Context;

class SaveAsContext implements Context
{
    /**
     * @Given /^I have specified save format (.*) document to be converted$/
     */
    public function iHaveSpecifiedSaveFormatDocumentToBeConverted($DestFormat)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified destFileName (.*)$/
     */
    public function iHaveSpecifiedDestFileName($OutPath)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I execute conversion from storage \(POST SaveAs\)$/
     */
    public function iExecuteConversionFromStoragePOSTSaveAs()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^document (.*) is existed on storage in (.*) folder$/
     */
    public function documentIsExistedOnStorageInFolder($OutPath, $SubFolder)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified encoding (.*)$/
     */
    public function iHaveSpecifiedEncoding($LoadEncoding)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^symbols are encoded properly$/
     */
    public function symbolsAreEncodedProperly()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}