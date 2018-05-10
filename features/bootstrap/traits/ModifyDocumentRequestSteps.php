<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 21:40
 */

trait ModifyDocumentRequestSteps
{
    /**
     * @Given /^I have specified a destFileName (.*)$/
     */
    public function iHaveSpecifiedADestFileName($DestinationFileName)
    {
        $this->request->set_dest_file_name($DestinationFileName);
    }
}