<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="WordDocumentSteps.php">
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
 * Trait with steps for specifying document properties
 */
trait WordDocumentSteps
{
    /**
     * Step for specifying encoding
     *
     * @param string $LoadEncoding encoding
     *
     * @Given  /^I have specified encoding (.*)$/
     * @return void
     */
    public function iHaveSpecifiedEncoding($LoadEncoding)
    {
        $this->request->set_load_encoding($LoadEncoding);
    }

    /**
     * Step for specifying document name and folder
     *
     * @param string $DocName   document name
     * @param string $SubFolder folder
     *
     * @Given  /^I have specified document (.*) with folder (.*) in URL$/
     * @return void
     */
    public function iHaveSpecifiedDocumentWithFolderInURL($DocName, $SubFolder)
    {
        $this->request->set_name($DocName)->set_folder(trim($this->BaseRemoteFolder() . $SubFolder, "/"));
    }
}