<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="PutExecuteSteps.php">
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
 * Trait with steps for put execute operations
 */
trait PutExecuteSteps
{
    /**
     * Step for specifying file
     *
     * @param string $TemplateName file name
     *
     * @Given  /^I have specified a template file (.*) in request$/
     * @return void
     */
    public function iHaveSpecifiedATemplateFileInRequest($TemplateName)
    {
        $template = realpath(__DIR__ . '/../../..') . '/TestData/' . self::MAILMERGEFOLDER . $TemplateName;
        $this->request->set_template($template);
    }

    /**
     * Step for specifying body
     *
     * @param string $Body file with data
     *
     * @Given  /^I have specified a body (.*)$/
     * @return void
     */
    public function iHaveSpecifiedABody($Body)
    {
        $data = realpath(__DIR__ . '/../../..') . '/TestData/' . self::MAILMERGEFOLDER . $Body;
        $this->request->set_data($data);
    }
}