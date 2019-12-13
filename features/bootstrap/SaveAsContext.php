<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="SaveAsContext.php">
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

use PHPUnit\Framework\Assert;
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/StorageSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyFormatOutputPathSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/WordDocumentSteps.php";
/*
 * Class with steps for saveas operation
 */
class SaveAsContext extends BaseTest\BaseContext
{
    use StorageSteps, SpecifyFormatOutputPathSteps, WordDocumentSteps;

    /*
     * ctor
     */
    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\SaveAsRequest("", new \Aspose\Words\Model\SaveOptionsData());
    }

    /**
     * Step for specifying destination format
     *
     * @param string $DestFormat destination format
     *
     * @Given  /^I have specified save format (.*) document to be converted$/
     * @return void
     */
    public function iHaveSpecifiedSaveFormatDocumentToBeConverted($DestFormat)
    {
        $this->request->get_save_options_data()->setSaveFormat($DestFormat);
    }

    /**
     * Step for executing conversion from storage
     *
     * @When   /^I execute conversion from storage \(POST SaveAs\)$/
     * @return void
     */
    public function iExecuteConversionFromStoragePOSTSaveAs()
    {
        $this->response = $this->context->get_api()->saveAs($this->request);
    }

    /**
     * Step for correct encoding assertion
     *
     * @Given  /^symbols are encoded properly$/
     * @return void
     */
    public function symbolsAreEncodedProperly()
    {
        $textItems = json_decode($this->context
            ->get_api()->getRun(
                new \Aspose\Words\Model\Requests\GetRunRequest(
                    "TableDocumentDoc.doc", "paragraphs/0", 0,
                    $this->BaseRemoteFolder() . "/DocumentActions/ConvertDocument/out/saveas"
                )
            ));
        
        Assert::assertEquals("строка", $textItems->Run->Text, "Wrong conversion");
    }

    /**
     * Step for specifying output path for document
     *
     * @param string $OutPath path
     *
     * @Given  /^I have specified destFileName (.*)$/
     * @return void
     */
    public function iHaveSpecifiedDestFileName($OutPath)
    {
        $this->request->get_save_options_data()->setFileName($OutPath);
    }
}