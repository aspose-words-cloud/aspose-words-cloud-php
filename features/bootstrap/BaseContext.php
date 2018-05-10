<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 19:42
 */

namespace BaseTest;
use Behat\Behat\Context\Context;
include_once($_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php");
class BaseContext implements Context
{
    public $request;
    public $context;
    public $response;

    public function __construct()
    {
        $this->context = new BaseTestContext();
        $this->context->setUp();
    }

    /*
     * Returns remote folder
     */
    public function BaseRemoteFolder()
    {
        return BaseTestContext::$baseRemoteFolder;
    }

    /*
     * Returns base out folder
     */
    public function BaseRemoteOut()
    {
        return BaseTestContext::$baseRemoteFolder . BaseTestContext::$baseTestOut;
    }
}