<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="MathObjectTests.php">
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
use PHPUnit\Framework\Assert;

class MathObjectTests extends \PHPUnit_Framework_TestCase
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
     * Test case for deleteOfficeMathObject
     *
     * Removes OfficeMath object from document..
     *
     */
    public function testDeleteOfficeMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestDeleteOfficeMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MathObject/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteOfficeMathObjectRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, "");

        $result = $this->words->deleteOfficeMathObject($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getOfficeMathObject
     *
     * Read OfficeMath object by index..
     *
     */
    public function testGetOfficeMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MathObject/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetOfficeMathObjectRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getOfficeMathObject($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getOfficeMathObjects
     *
     * Get OfficeMath objects from document..
     *
     */
    public function testGetOfficeMathObjects()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObjects.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MathObject/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetOfficeMathObjectsRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getOfficeMathObjects($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for renderMathObject
     *
     * Renders math object to specified format..
     *
     */
    public function testRenderMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestRenderMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MathObject/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\RenderMathObjectRequest($remoteName, $format, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->renderMathObject($request);
        Assert::assertNotNull($result, "Error occurred while math object rendering");
    }
}