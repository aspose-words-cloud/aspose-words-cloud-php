<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ConvertDocumentTests.php">
*   Copyright (c) 2017 Aspose.Words for Cloud
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
use Aspose\Storage\StorageApi;
use Aspose\Words\Configuration;
use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\SaveOptionsData;
use Aspose\Words\Model\TiffSaveOptionsData;
use PHPUnit\Framework\Assert;

class ConvertDocumentTests extends \PHPUnit_Framework_TestCase
{
    protected $words;

    protected $storage;

    protected $config;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->storage = new StorageApi();
        $this->config = new Configuration();
        $this->storage->apiClient->apiKey = $this->config->getAppKey();
        $this->storage->apiClient->appSid = $this->config->getAppSid();
        $this->storage->apiClient->apiServer = $this->config->getHost() . "/v1.1/";
        $this->words = new WordsApi(null, $this->config);
    }

    /**
     * Test case for postDocumentSaveAs
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testPostDocumentSaveAs()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostDocumentSaveAs.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPostDocumentSaveAs.pdf";
        $saveOptions = new SaveOptionsData(array("save_format" => "pdf", "file_name" => $destName));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostDocumentSaveAsRequest($remoteName, $saveOptions, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->postDocumentSaveAs($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postDocumentSaveAsFromPdfToDoc
     *
     * Convert document to destination format with detailed settings and save result to storage..
     *
     */
    public function testPostDocumentSaveAsFromPdfToDoc()
    {
        $localName = "45.pdf";
        $remoteName = "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPostDocumentSaveAsFromPdfToDoc.docx";
        $saveOptions = new SaveOptionsData(array("save_format" => "docx", "file_name" => $destName));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Conversion/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostDocumentSaveAsRequest($remoteName, $saveOptions, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->postDocumentSaveAs($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putConvertDocument
     *
     * Convert document from request content to format specified..
     *
     */
    public function testPutConvertDocument()
    {
        $format = "pdf";
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/ConvertDocument/' . "test_uploadfile.docx";

        $request = new Requests\PutConvertDocumentRequest($file, $format);

        $result = $this->words->putConvertDocument($request);
        Assert::assertNotNull($result, "Error occured while converting document");
    }

    /**
     * Test case for putDocumentSaveAsTiff
     *
     * Convert document to tiff with detailed settings and save result to storage..
     *
     */
    public function testPutDocumentSaveAsTiff()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutDocumentSaveAsTiff.docx";
        $subfolder = "DocumentActions/ConvertDocument";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . "TestPutDocumentSaveAsTiff.tiff";
        $body = new TiffSaveOptionsData(array("file_name" => "abc.tiff", "save_format" => "tiff"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PutDocumentSaveAsTiffRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->putDocumentSaveAsTiff($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}