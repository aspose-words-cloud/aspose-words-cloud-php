<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 21:23
 */
use PHPUnit\Framework\Assert;
trait FileResultSteps
{
    /**
     * @Then /^document is returned as an attachment$/
     */
    public function documentIsReturnedAsAnAttachment()
    {
        Assert::assertNotNull($this->response, "Error has occurred while document convert");
    }

    /**
     * @Then /^attachment's format is (.*)$/
     */
    public function attachmentSFormatIs($DestFormat)
    {
        if ($this->response instanceof SplFileObject)
        {
            if ($DestFormat == "pdf")
            {
                $this->response->seek(0);
                $actualFormat = $this->response->fread(4);
                $expectedFormat = "%PDF";
                Assert::assertEquals($expectedFormat, $actualFormat, "Formats are different");
            }

            Assert::assertNotEmpty($this->response);
        }
    }
}