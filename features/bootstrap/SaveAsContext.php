<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:08
 */

use PHPUnit\Framework\Assert;
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/StorageSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/WordDocumentSteps.php");
class SaveAsContext extends BaseTest\BaseContext
{
    use StorageSteps, WordDocumentSteps;

    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\PostDocumentSaveAsRequest("", new \Aspose\Words\Model\SaveOptionsData());
    }

    /**
     * @Given /^I have specified save format (.*) document to be converted$/
     */
    public function iHaveSpecifiedSaveFormatDocumentToBeConverted($DestFormat)
    {
        $this->request->get_save_options_data()->setSaveFormat($DestFormat);
    }

    /**
     * @When /^I execute conversion from storage \(POST SaveAs\)$/
     */
    public function iExecuteConversionFromStoragePOSTSaveAs()
    {
        $this->response = $this->context->get_api()->postDocumentSaveAs($this->request);
    }

    /**
     * @Given /^symbols are encoded properly$/
     */
    public function symbolsAreEncodedProperly()
    {
        $textItems = $this->context->
        get_api()->getDocumentTextItems(
            new \Aspose\Words\Model\Requests\GetDocumentTextItemsRequest("TableDocumentDoc.doc",
                $this->BaseRemoteFolder() . "DocumentActions/ConvertDocument/out/saveas"));
        Assert::assertEquals("строка", $textItems->getTextItems()->getList()[0]->getText(), "Wrong conversion");
    }

    /**
     * @Given /^I have specified destFileName (.*)$/
     */
    public function iHaveSpecifiedDestFileName($OutPath)
    {
        $this->request->get_save_options_data()->setFileName($OutPath);
    }
}