<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseContext.php">
*   Copyright (c) 2019 Aspose.Words for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/

namespace BaseTest;
use Aspose\Tests\BaseTestContext;
use Behat\Behat\Context\Context;
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php";

/*
 * Base context for all bdd tests
 */
class BaseContext implements Context
{
    const MAILMERGEFOLDER = "/DocumentActions/MailMerge/";

    public $request;
    public $context;
    public $response;

    /*
     * ctor
     */
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