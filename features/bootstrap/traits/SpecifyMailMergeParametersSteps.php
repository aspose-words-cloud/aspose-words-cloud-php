<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 11.05.2018
 * Time: 0:01
 */

trait SpecifyMailMergeParametersSteps
{
    /**
     * @Given /^I have specified withRegions (.*)$/
     */
    public function iHaveSpecifiedWithRegions($UseRegions)
    {
        $this->request->set_with_regions($UseRegions);
    }

    /**
     * @Given /^I have specified useWholeParagraphAsRegion (.*)$/
     */
    public function iHaveSpecifiedUseWholeParagraphAsRegion($UseWholeParagraphAsRegion)
    {
        $this->request->set_use_whole_paragraph_as_region($UseWholeParagraphAsRegion);
    }

    /**
     * @Given /^I have specified a cleanup option (.*)$/
     */
    public function iHaveSpecifiedACleanupOption($Cleanup)
    {
        $this->request->set_cleanup($Cleanup);
    }
}