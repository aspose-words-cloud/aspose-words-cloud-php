<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 14:49
 */

use Behat\Behat\Context\Context;
use BaseTest\BaseTestContext;
use Aspose\Words\Model\Requests;
include_once($_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php");
class AlternateDocumentContext implements Context
{
    public $request;
    public $context;

    public function __construct()
    {
        $this->context = new BaseTestContext();
        $this->request = new Requests\GetDocumentWithFormatRequest();
    }
    /**
     * @Given /^I have specified document (.*) with folder (.*) in URL$/
     */
    public function iHaveSpecifiedDocumentWithFolderInURL($DocName, $SubFolder)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have uploaded document with name (.*) and subfolder is (.*) to storage$/
     */
    public function iHaveUploadedDocumentWithNameAndSubfolderIsToStorage($DocName, $SubFolder)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified format (.*) document to be converted$/
     */
    public function iHaveSpecifiedFormatDocumentToBeConverted($DestFormat)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I execute conversion from storage \(GET document with format\)$/
     */
    public function iExecuteConversionFromStorageGETDocumentWithFormat()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^document is returned as an attachment$/
     */
    public function documentIsReturnedAsAnAttachment()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^attachment's format is (.*)$/
     */
    public function attachmentSFormatIs($DestFormat)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified output path (.*)$/
     */
    public function iHaveSpecifiedOutputPath($OutPath)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^document (.*) is existed on storage in output folder$/
     */
    public function documentIsExistedOnStorageInOutputFolder($OutPath)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}