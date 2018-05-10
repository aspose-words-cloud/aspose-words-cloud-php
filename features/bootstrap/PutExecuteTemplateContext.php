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
class PutExecuteTemplateContext extends BaseTest\BaseContext
{
    use SpecifyMailMergeParametersSteps, PutExecuteSteps;

    public function __construct()
    {
        parent::__construct();
        $this->request = new \Aspose\Words\Model\Requests\PutExecuteTemplateOnlineRequest("", "");
    }

    /**
     * @When /^I execute template online$/
     */
    public function iExecuteTemplateOnline()
    {
        $this->context->get_api()->putExecuteTemplateOnline($this->request);
    }
}