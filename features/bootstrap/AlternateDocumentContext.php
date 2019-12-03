<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="AlternateDocumentContext.php">
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
use Aspose\Words\Model\Requests;
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/StorageSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyFormatOutputPathSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/FileResultSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/WordDocumentSteps.php";
/*
 * Steps for getting document with format
 */
class AlternateDocumentContext extends BaseTest\BaseContext
{
    use StorageSteps, SpecifyFormatOutputPathSteps, FileResultSteps, WordDocumentSteps;

    /*
     * ctor
     */
    public function __construct()
    {
        parent::__construct();
        $this->request = new Requests\GetDocumentWithFormatRequest("", "");
    }

    /**
     * Step for executing request
     *
     * @When   /^I execute conversion from storage \(GET document with format\)$/
     * @return void
     */
    public function iExecuteConversionFromStorageGETDocumentWithFormat()
    {
        $this->response = $this->context->get_api()->getDocumentWithFormat($this->request);
    }
}