<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 25.04.2018
 * Time: 11:09
 */

use Behat\Behat\Context\BehatContext;

class FeatureContext extends BehatContext
{
    /**
     * @Given /^attachment's format is (.*)$/
     */
    public function attachmentSFormatIs($DestFormat)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}