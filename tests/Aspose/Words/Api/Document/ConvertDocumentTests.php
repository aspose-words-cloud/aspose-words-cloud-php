<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertDocumentTests.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
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

namespace Aspose\Tests;

use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;

/*
 * Example of how to convert document to one of the available formats.
 */
class ConvertDocumentTests extends BaseTestContext
{
    private static $remoteFolder = baseRemoteFolder . "/DocumentActions/ConvertDocument";
    private static $localFolder = "DocumentActions/ConvertDocument";

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAs()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestSaveAs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
            "save_format" => "pdf",
            "file_name" => baseTestOut . "/TestSaveAs.pdf",
        ));
        $request = new Requests\SaveAsRequest(
            $remoteName,
            $requestSaveOptionsData,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAsDocx()
    {
        $localName = "45.pdf";
        $remoteName = "TestSaveAsFromPdfToDoc.pdf";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFolder . "/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
            "save_format" => "docx",
            "file_name" => baseTestOut . "/TestSaveAsFromPdfToDoc.docx",
        ));
        $request = new Requests\SaveAsRequest(
            $remoteName,
            $requestSaveOptionsData,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAsTiff()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestSaveAsTiff.pdf";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
            "save_format" => "tiff",
            "file_name" => baseTestOut . "/abc.tiff",
        ));
        $request = new Requests\SaveAsTiffRequest(
            $remoteName,
            $requestSaveOptions,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAsTiff($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * A test for ConvertDocument.
     */
    public function testConvertDocument()
    {
        $request = new Requests\ConvertDocumentRequest(
            realpath(__DIR__ . '/../../../../..') . $localFolder . "/test_uploadfile.docx",
            "pdf",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->convertDocument($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}