<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="WatermarkTests.php">
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
use Aspose\Words\Model\WatermarkText;
use PHPUnit\Framework\Assert;

class WatermarkTests extends \PHPUnit_Framework_TestCase
{
    protected $storage;

    protected $words;

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
     * Test case for deleteDocumentWatermark
     *
     * Delete watermark (for deleting last watermark from the document)..
     *
     */
    public function testDeleteDocumentWatermark()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestDeleteDocumentWatermark.docx";
        $subfolder = "DocumentActions/Watermark";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteDocumentWatermarkRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteDocumentWatermark($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postInsertDocumentWatermarkImage
     *
     * Insert document watermark image..
     *
     */
    public function testPostInsertDocumentWatermarkImage()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostInsertDocumentWatermarkImage.docx";
        $subfolder = "DocumentActions/Watermark";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $rotationAngle = 0;
        $image = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostInsertDocumentWatermarkImageRequest($remoteName, $image, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null, $rotationAngle);

        $result = $this->words->postInsertDocumentWatermarkImage($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postInsertDocumentWatermarkText
     *
     * Insert document watermark text..
     *
     */
    public function testPostInsertDocumentWatermarkText()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostInsertDocumentWatermarkText.docx";
        $subfolder = "DocumentActions/Watermark";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new WatermarkText(array("text" => "This is the text", "rotation_angle" => 90));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostInsertDocumentWatermarkTextRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null,
            $destName, null, null);

        $result = $this->words->postInsertDocumentWatermarkText($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}