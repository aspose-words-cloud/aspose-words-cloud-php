<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentWithFormatTests.php">
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
namespace Aspose\Tests;
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\SaveOptionsData;
use Aspose\Words\Model\LoadWebDocumentData;
use PHPUnit\Framework\Assert;

class LoadWebDocumentTests extends BaseTestContext
{
    /**
     * Test case for loadWebDocument
     *
     * Loads new document from web into the file with any supported format of data..
     *
     */
    public function testLoadWebDocument()
    {
        $saveOptions = new SaveOptionsData(array(
            "file_name" => "google.doc",
            "save_format" => "doc",
            "dml_effects_rendering_mode" => "1",
            "dml_rendering_mode" => "1",
            "update_sdt_content" => false,
            "zip_output" => false
        ));

        $body = new LoadWebDocumentData(array("loading_document_url" => "http://google.com", "save_options" => $saveOptions));

        $request = new Requests\LoadWebDocumentRequest($body);

        $result = $this->words->loadWebDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}