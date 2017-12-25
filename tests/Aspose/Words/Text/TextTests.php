<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TextTests.php">
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
use Aspose\Words\Model\ReplaceTextRequest;
use PHPUnit\Framework\Assert;

class TextTests extends \PHPUnit_Framework_TestCase
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
     * Test case for getDocumentTextItems
     *
     * Read document text items..
     *
     */
    public function testGetDocumentTextItems()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentTextItems.docx";
        $subfolder = "DocumentActions/Text";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetDocumentTextItemsRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentTextItems($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postReplaceText
     *
     * Replace document text..
     *
     */
    public function testPostReplaceText()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostReplaceText.docx";
        $subfolder = "DocumentActions/Text";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new ReplaceTextRequest(array("old_value" => "aspose", "new_value" => "aspose new"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostReplaceTextRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->postReplaceText($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for search
     *
     * Search text in document..
     *
     */
    public function testSearch()
    {
        $localName = "SampleWordDocument.docx";
        $remoteName = "TestSearch.docx";
        $subfolder = "DocumentActions/Text";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $pattern = "aspose";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Text/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\SearchRequest($remoteName, $pattern, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->search($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}