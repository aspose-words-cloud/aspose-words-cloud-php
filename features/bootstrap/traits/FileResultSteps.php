<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FileResultSteps.php">
*   Copyright (c) 2019 Aspose.Words for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/

use PHPUnit\Framework\Assert;
/*
 * Trait with steps for files
 */
trait FileResultSteps
{
    /**
     * Step for attachment assertion
     *
     * @Then   /^document is returned as an attachment$/
     * @return void
     */
    public function documentIsReturnedAsAnAttachment()
    {
        Assert::assertNotNull($this->response, "Error has occurred while document convert");
    }

    /**
     * Step for attachment format assertion
     *
     * @param string $DestFormat format
     *
     * @Then   /^attachment's format is (.*)$/
     * @return void
     */
    public function attachmentSFormatIs($DestFormat)
    {
        if ($this->response instanceof SplFileObject) {
            if ($DestFormat == "pdf") {
                $this->response->seek(0);
                $actualFormat = $this->response->fread(4);
                $expectedFormat = "%PDF";
                Assert::assertEquals($expectedFormat, $actualFormat, "Formats are different");
            }

            Assert::assertNotEmpty($this->response);
        }
    }
}