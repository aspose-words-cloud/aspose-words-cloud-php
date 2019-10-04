<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="PutExecuteMailMergeContext.php">
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

require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/PutExecuteSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/FileResultSteps.php";
/*
 * Class with steps for put execute mailmerge
 */
class PutExecuteMailMergeContext extends BaseTest\BaseContext
{
    use PutExecuteSteps, FileResultSteps;
    /*
     * ctor
     */
    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\ExecuteMailMergeOnlineRequest("", "");
    }

    /**
     * Step for executing mailmerge
     *
     * @When   /^I execute mail merge online$/
     * @return void
     */
    public function iExecuteMailMergeOnline()
    {
        $this->response = $this->context->get_api()->executeMailMergeOnline($this->request);
    }
}