<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 11.05.2018
 * Time: 1:35
 */

trait PostExecuteSteps
{
    /**
     * @Given /^I have specified a template file (.*) in request$/
     */
    public function iHaveSpecifiedATemplateFileInRequest($TemplateName)
    {
        $template = file_get_contents(realpath(__DIR__ . '/../../..') . '/TestData/' . self::testFolder . $TemplateName);
        $this->request->set_name($template);
    }

    /**
     * @Given /^I have specified a body (.*)$/
     */
    public function iHaveSpecifiedABody($Body)
    {
        $data = file_get_contents(realpath(__DIR__ . '/../../..') . '/TestData/' . self::testFolder . $Body);
        $this->request->set_data($data);
    }
}