<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 14:49
 */
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/FileResultSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyFormatOutputPathSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/StorageSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/WordDocumentSteps.php");
class AlternateDocumentContext extends BaseTest\BaseContext
{
    use FileResultSteps, SpecifyFormatOutputPathSteps, StorageSteps, WordDocumentSteps;
    public function __construct()
    {
        parent::__construct();
        $this->request = new Requests\GetDocumentWithFormatRequest("", "");
    }

    /**
     * @When /^I execute conversion from storage \(GET document with format\)$/
     */
    public function iExecuteConversionFromStorageGETDocumentWithFormat()
    {
        $this->response = $this->context->get_api()->getDocumentWithFormat($this->request);
    }
}