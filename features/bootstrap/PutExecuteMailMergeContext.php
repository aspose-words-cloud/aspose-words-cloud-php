<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:25
 */
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/BaseContext.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/SpecifyMailMergeParametersSteps.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "features/bootstrap/traits/PutExecuteSteps.php");
class PutExecuteMailMergeContext extends BaseTest\BaseContext
{
    use SpecifyMailMergeParametersSteps, PutExecuteSteps;

    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\PutExecuteMailMergeOnlineRequest("", "");
    }

    /**
     * @When /^I execute mail merge online$/
     */
    public function iExecuteMailMergeOnline()
    {
        $this->context->get_api()->putExecuteMailMergeOnline($this->request);
    }
}