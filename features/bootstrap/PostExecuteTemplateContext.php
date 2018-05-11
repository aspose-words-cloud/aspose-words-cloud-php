<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="PostExecuteTemplateContext.php">
*   Copyright (c) 2018 Aspose.Words for Cloud
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
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/ModifyDocumentRequestSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyMailMergeParametersSteps.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/PostExecuteSteps.php";

/*
 * Steps for post execute template operation
 */
class PostExecuteTemplateContext extends BaseTest\BaseContext
{
    const TESTFOLDER = "DocumentActions/MailMerge/";
    use ModifyDocumentRequestSteps, SpecifyMailMergeParametersSteps, PostExecuteSteps;

    /*
     * ctor
     */
    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\PostExecuteTemplateRequest("", "");

    }

    /**
     * Step for specifying template name
     *
     * @param string $TemplateName name of template
     *
     * @Given  /^I have specified a template file name (.*) in storage$/
     * @return void
     */
    public function iHaveSpecifiedATemplateFileNameInStorage($TemplateName)
    {
        $fullName = $this->BaseRemoteFolder() . self::TESTFOLDER . $TemplateName;
        $file = realpath(__DIR__ . '/../..') . '/TestData/' . self::TESTFOLDER . $TemplateName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->context->get_storage()->PutCreate($putRequest);
        $this->request->set_name($TemplateName)->set_folder(trim($this->BaseRemoteFolder() . self::TESTFOLDER, "/"));
    }

    /**
     * Step for executing template
     *
     * @When   /^I execute template$/
     * @return void
     */
    public function iExecuteTemplate()
    {
        $this->context->get_api()->postExecuteTemplate($this->request);
    }

    /**
     * Step for image rendering assertion
     *
     * @Given  /^image should be rendered$/
     * @return void
     */
    public function imageShouldBeRendered()
    {
        $imagesResponse = $this->context->get_api()->getDrawingObjects(
            new \Aspose\Words\Model\Requests\GetDocumentDrawingObjectsRequest(
                "ExecuteTemplateWithImagesResult.doc",
                $this->BaseRemoteFolder() . "DocumentActions/MailMerge"
            )
        );

        Assert::assertEquals(true, count($imagesResponse->getDrawingObjects()->getList()) > 0, "Error has occurred while image rendering");
    }
}