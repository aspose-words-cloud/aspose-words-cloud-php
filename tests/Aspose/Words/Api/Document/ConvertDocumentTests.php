<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertDocumentTests.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

/*
 * Example of how to convert document to one of the available formats.
 */
class ConvertDocumentTests extends BaseTestContext
{
    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAs()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/ConvertDocument";
        $localName = "test_multi_pages.docx";
        $remoteName = "TestSaveAs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
            "save_format" => "pdf",
            "file_name" => self::$baseTestOutPath . "/TestSaveAs.pdf",
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
        Assert::assertNotNull($result->getSaveResult());
        Assert::assertNotNull($result->getSaveResult()->getDestDocument());
    }

    /*
     * Test for converting document online to one of the available formats.
     */
    public function testSaveAsOnline()
    {
        $localName = "test_multi_pages.docx";

        $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
            "save_format" => "pdf",
            "file_name" => self::$baseTestOutPath . "/TestSaveAs.pdf",
        ));
        $request = new Requests\SaveAsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . "Common/" . $localName,
            $requestSaveOptionsData,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAsOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAsDocx()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/ConvertDocument";
        $localFolder = "DocumentActions/ConvertDocument";
        $localName = "45.pdf";
        $remoteName = "TestSaveAsFromPdfToDoc.pdf";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFolder . "/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
            "save_format" => "docx",
            "file_name" => self::$baseTestOutPath . "/TestSaveAsFromPdfToDoc.docx",
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
        Assert::assertNotNull($result->getSaveResult());
        Assert::assertNotNull($result->getSaveResult()->getDestDocument());
    }

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAsTiff()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/ConvertDocument";
        $localName = "test_multi_pages.docx";
        $remoteName = "TestSaveAsTiff.pdf";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
            "save_format" => "tiff",
            "file_name" => self::$baseTestOutPath . "/abc.tiff",
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
        Assert::assertNotNull($result->getSaveResult());
        Assert::assertNotNull($result->getSaveResult()->getDestDocument());
    }

    /*
     * Test for converting document to one of the available formats.
     */
    public function testSaveAsTiffOnline()
    {
        $localName = "test_multi_pages.docx";

        $requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
            "save_format" => "tiff",
            "file_name" => self::$baseTestOutPath . "/abc.tiff",
        ));
        $request = new Requests\SaveAsTiffOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . "Common/" . $localName,
            $requestSaveOptions,
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

        $result = $this->words->saveAsTiffOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * A test for ConvertDocument.
     */
    public function testConvertDocument()
    {
        $localFolder = "DocumentActions/ConvertDocument";

        $request = new Requests\ConvertDocumentRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFolder . "/test_uploadfile.docx",
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