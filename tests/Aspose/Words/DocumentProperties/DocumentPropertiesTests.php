<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentPropertiesTests.php">
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
use Aspose\Words\Model\DocumentProperty;
use PHPUnit\Framework\Assert;

class DocumentPropertiesTests extends \PHPUnit_Framework_TestCase
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
     * Test case for createOrUpdateDocumentProperty
     *
     * Add new or update existing document property..
     *
     */
    public function testCreateOrUpdateDocumentProperty()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestPutUpdateDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "AsposeAuthor";
        $property = new DocumentProperty(array("name" => "Author", "value" => "Imran Anwar"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\CreateOrUpdateDocumentPropertyRequest($remoteName, $propertyName, $property, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->createOrUpdateDocumentProperty($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteDocumentProperty
     *
     * Delete document property..
     *
     */
    public function testDeleteDocumentProperty()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "testProp";
        $destName = self::$baseTestOut . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteDocumentPropertyRequest($remoteName, $propertyName, $folder=self::$baseTestPath . $subfolder, null, null, null, $destName);

        $result = $this->words->deleteDocumentProperty($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getDocumentProperties
     *
     * Read document properties info..
     *
     */
    public function testGetDocumentProperties()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProperties.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetDocumentPropertiesRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProperties($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getDocumentProperty
     *
     * Read document property info by the property name..
     *
     */
    public function testGetDocumentProperty()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "Author";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetDocumentPropertyRequest($remoteName, $propertyName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProperty($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}