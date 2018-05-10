<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:24
 */
use PHPUnit\Framework\Assert;
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/ModifyDocumentRequestSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyMailMergeParametersSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/PostExecuteSteps.php");
class PostExecuteTemplateContext extends BaseTest\BaseContext
{
    const testFolder = "DocumentActions/MailMerge/";
    use ModifyDocumentRequestSteps, SpecifyMailMergeParametersSteps, PostExecuteSteps;

    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\PostExecuteTemplateRequest("", "");

    }

    /**
     * @Given /^I have specified a template file name (.*) in storage$/
     */
    public function iHaveSpecifiedATemplateFileNameInStorage($TemplateName)
    {
        $fullName = $this->BaseRemoteFolder() . self::testFolder . $TemplateName;
        $file = realpath(__DIR__ . '/../..') . '/TestData/' . self::testFolder . $TemplateName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->context->get_storage()->PutCreate($putRequest);
        $this->request->set_name($TemplateName)->set_folder(trim($this->BaseRemoteFolder() . self::testFolder, "/"));
    }

    /**
     * @When /^I execute template$/
     */
    public function iExecuteTemplate()
    {
        $this->context->get_api()->postExecuteTemplate($this->request);
    }

    /**
     * @Given /^image should be rendered$/
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