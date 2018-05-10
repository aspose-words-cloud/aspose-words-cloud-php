<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 11.05.2018
 * Time: 1:00
 */

trait PutExecuteSteps
{
    /**
     * @Given /^I have specified a template file (.*) in request$/ @PutExecuteTemplate||@PutExecuteMailMerge
     */
    public function iHaveSpecifiedATemplateFileInRequest($TemplateName)
    {
        $template = realpath(__DIR__ . '/../../..') . '/TestData/' . self::testFolder . $TemplateName;
        $this->request->set_template($template);
    }

    /**
     * @Given /^I have specified a body (.*)$/ @PutExecuteTemplate||@PutExecuteMailMerge
     */
    public function iHaveSpecifiedABody($Body)
    {
        $data = realpath(__DIR__ . '/../../..') . '/TestData/' . self::testFolder . $Body;
        $this->request->set_data($data);
    }
}