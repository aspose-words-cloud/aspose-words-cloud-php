<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="SpecifyMailMergeParametersSteps.php">
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
 * Trait with steps for mail merge parameters
 */
trait SpecifyMailMergeParametersSteps
{
    /**
     * Step for specifying with regions
     *
     * @param bool $UseRegions use regions or not
     *
     * @Given  /^I have specified withRegions (.*)$/
     * @return void
     */
    public function iHaveSpecifiedWithRegions($UseRegions)
    {
        $this->request->set_with_regions($UseRegions);
    }

    /**
     * Step for specifying useWholeParagraphAsRegion
     *
     * @param bool $UseWholeParagraphAsRegion use whole paragraph as region or not
     *
     * @Given  /^I have specified useWholeParagraphAsRegion (.*)$/
     * @return void
     */
    public function iHaveSpecifiedUseWholeParagraphAsRegion($UseWholeParagraphAsRegion)
    {
        $this->request->set_use_whole_paragraph_as_region($UseWholeParagraphAsRegion);
    }

    /**
     * Step for specifying cleanup
     *
     * @param string $Cleanup cleanup option
     *
     * @Given  /^I have specified a cleanup option (.*)$/
     * @return void
     */
    public function iHaveSpecifiedACleanupOption($Cleanup)
    {
        $this->request->set_cleanup($Cleanup);
    }
}