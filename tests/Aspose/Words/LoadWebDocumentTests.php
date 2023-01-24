<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LoadWebDocumentTests.php">
 *   Copyright (c) 2023 Aspose.Words for Cloud
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
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{LoadWebDocumentRequest};
use Aspose\Words\Model\{DocSaveOptionsData, LoadWebDocumentData};
use PHPUnit\Framework\Assert;

/*
 * Example of how to load web document.
 */
class LoadWebDocumentTests extends BaseTestContext
{
    /*
     * Test for loading web document.
     */
    public function testLoadWebDocument()
    {
        $requestDataSaveOptions = new DocSaveOptionsData(array(
            "file_name" => "google.doc",
            "dml_effects_rendering_mode" => "None",
            "dml_rendering_mode" => "DrawingML",
            "update_sdt_content" => false,
            "zip_output" => false,
        ));
        $requestData = new LoadWebDocumentData(array(
            "loading_document_url" => "http://google.com",
            "save_options" => $requestDataSaveOptions,
        ));
        $request = new LoadWebDocumentRequest(
            $requestData,
            NULL
        );

        $result = $this->words->loadWebDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSaveResult());
        Assert::assertNotNull($result->getSaveResult()->getDestDocument());
        Assert::assertEquals("google.doc", $result->getSaveResult()->getDestDocument()->getHref());
    }
}