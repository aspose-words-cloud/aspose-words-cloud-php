<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ConvertDocumentTests.php">
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
use Aspose\Words\Model\TiffSaveOptionsData;
use PHPUnit\Framework\Assert;
use Aspose\Words\ApiException;
class ConvertDocumentTests extends BaseTestContext
{
    /**
     * Test case for saveAs
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testSaveAs()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestSaveAs.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPostDocumentSaveAs.pdf";
        $saveOptions = new SaveOptionsData(array("save_format" => "pdf", "file_name" => $destName));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\SaveAsRequest($remoteName, $saveOptions, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->saveAs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for SaveAsFromPdfToDoc
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testSaveAsFromPdfToDoc()
    {
        $localName = "45.pdf";
        $remoteName = "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $saveOptions = new SaveOptionsData(array("save_format" => "docx", "file_name" => $destName));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/ConvertDocument/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\SaveAsRequest($remoteName, $saveOptions, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->saveAs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for convertDocument
     *
     * Convert document from request content to format specified..
     *
     */
    public function testConvertDocument()
    {
        $format = "pdf";
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/ConvertDocument/' . "test_uploadfile.docx";

        $request = new Requests\ConvertDocumentRequest($file, $format);

        $result = $this->words->convertDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for saveAsTiff
     *
     * Convert document to tiff with detailed settings and save result to storage..
     *
     */
    public function testSaveAsTiff()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutDocumentSaveAsTiff.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPutDocumentSaveAsTiff.tiff";
        $body = new TiffSaveOptionsData(array("file_name" => "abc.tiff", "save_format" => "tiff"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\SaveAsTiffRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->saveAsTiff($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}