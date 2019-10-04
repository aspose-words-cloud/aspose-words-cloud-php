<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="SpecifyFormatOutputPathSteps.php">
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

/*
 * Trait with steps for format and output specifying
 */
trait SpecifyFormatOutputPathSteps
{
    /**
     * Step for specifying output path
     *
     * @param string $OutPath output path
     *
     * @Then   /^I have specified output path (.*)$/
     * @return void
     */
    public function iHaveSpecifiedOutputPath($OutPath)
    {
        $this->request->set_out_path($this->BaseRemoteOut() . $OutPath);
    }

    /**
     * Step for specifying document format
     *
     * @param string $DestFormat document format
     *
     * @Given  /^I have specified format (.*) document to be converted$/
     * @return void
     */
    public function iHaveSpecifiedFormatDocumentToBeConverted($DestFormat)
    {
        $this->request->set_format($DestFormat);
    }
}