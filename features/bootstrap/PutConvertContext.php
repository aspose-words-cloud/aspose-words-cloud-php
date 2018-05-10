<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:07
 */
use Aspose\Words\Model\Requests;
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/AlternateDocumentContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/StorageSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyFormatOutputPathSteps.php");
class PutConvertContext extends BaseTest\BaseContext
{
    use StorageSteps, SpecifyFormatOutputPathSteps;
    public function __construct()
    {
        parent::__construct();
        $this->request = new Requests\PutConvertDocumentRequest("", "");
    }

    /**
     * @Given /^I have specified document (.*) to send it in request body$/
     */
    public function iHaveSpecifiedDocumentToSendItInRequestBody($DocName)
    {
        $file = realpath(__DIR__ . '/../..') . '/TestData/DocumentActions/ConvertDocument/' . $DocName;
        $this->request->set_document($file);
    }

    /**
     * @When /^I execute conversion \(PUT convert\)$/
     */
    public function iExecuteConversionPUTConvert()
    {
        $this->response = $this->context->get_api()->putConvertDocument($this->request);
    }
}