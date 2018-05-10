<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 21:47
 */

trait SpecifyFormatOutputPathSteps
{
    /**
     * @Then /^I have specified output path (.*)$/
     */
    public function iHaveSpecifiedOutputPath($OutPath)
    {
        $this->request->set_out_path($this->BaseRemoteOut() . $OutPath);
    }

    /**
     * @Given /^I have specified format (.*) document to be converted$/
     */
    public function iHaveSpecifiedFormatDocumentToBeConverted($DestFormat)
    {
        $this->request->set_format($DestFormat);
    }
}