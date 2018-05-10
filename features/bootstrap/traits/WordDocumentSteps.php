<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 23:24
 */

trait WordDocumentSteps
{
    /**
     * @Given /^I have specified encoding (.*)$/
     */
    public function iHaveSpecifiedEncoding($LoadEncoding)
    {
        $this->request->set_load_encoding($LoadEncoding);
    }

    /**
     * @Given /^I have specified document (.*) with folder (.*) in URL$/
     */
    public function iHaveSpecifiedDocumentWithFolderInURL($DocName, $SubFolder)
    {
        $this->request->set_name($DocName)->set_folder(trim($this->BaseRemoteFolder() . $SubFolder, "/"));
    }
}