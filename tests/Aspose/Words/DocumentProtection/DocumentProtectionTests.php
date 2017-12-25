<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentProtectionTests.php">
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
use Aspose\Words\Model\ProtectionRequest;
use PHPUnit\Framework\Assert;

class DocumentProtectionTests extends \PHPUnit_Framework_TestCase
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
     * Test case for getDocumentProtection
     *
     * Read document protection common info..
     *
     */
    public function testGetDocumentProtection()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProtection.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetDocumentProtectionRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProtection($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putProtectDocument
     *
     * Protect document..
     *
     */
    public function testPutProtectDocument()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutProtectDocument.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new ProtectionRequest(array("new_password" => "123"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PutProtectDocumentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->putProtectDocument($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postChangeDocumentProtection
     *
     * Change document protection..
     *
     */
    public function testPostChangeDocumentProtection()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostChangeDocumentProtection.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $body = new ProtectionRequest(array("new_password" => ""));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostChangeDocumentProtectionRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->postChangeDocumentProtection($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteUnprotectDocument
     *
     * Unprotect document..
     *
     */
    public function testDeleteUnprotectDocument()
    {
        $localName = "SampleProtectedBlankWordDocument.docx";
        $remoteName = "TestDeleteUnprotectDocument.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $body = new ProtectionRequest(array("password" => "aspose"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentProtection/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteUnprotectDocumentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteUnprotectDocument($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}