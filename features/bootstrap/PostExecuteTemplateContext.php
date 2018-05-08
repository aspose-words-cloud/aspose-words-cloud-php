<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 02.05.2018
 * Time: 15:24
 */

use Behat\Behat\Context\Context;

class PostExecuteTemplateContext implements Context
{
    /**
     * @Given /^I have specified a template file name (.*) in storage$/
     */
    public function iHaveSpecifiedATemplateFileNameInStorage($TemplateName)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified a body (.*)$/
     */
    public function iHaveSpecifiedABody($Body)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified a destFileName (.*)$/
     */
    public function iHaveSpecifiedADestFileName($DestinationFileName)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I execute template$/
     */
    public function iExecuteTemplate()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified withRegions (.*)$/
     */
    public function iHaveSpecifiedWithRegions($UseRegions)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I have specified useWholeParagraphAsRegion (.*)$/
     */
    public function iHaveSpecifiedUseWholeParagraphAsRegion($UseWholeParagraphAsRegion)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^image should be rendered$/
     */
    public function imageShouldBeRendered()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}