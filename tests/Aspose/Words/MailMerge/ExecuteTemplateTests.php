<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ExecuteTemplateTests.php">
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

class ExecuteTemplateTests extends \PHPUnit_Framework_TestCase
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
     * Test case for postExecuteTemplate
     *
     * Populate document template with data..
     *
     */
    public function testPostExecuteTemplate()
    {
        $localName = "TestExecuteTemplate.doc";
        $remoteName = "TestPostExecuteTemplate.docx";
        $subfolder = "DocumentActions/MailMerge";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $data = file_get_contents(realpath(__DIR__ . '/../../../..') . '/TestData/MailMerge/' . "TestExecuteTemplateData.txt");

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MailMerge/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostExecuteTemplateRequest($remoteName, $data, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $destName);

        $result = $this->words->postExecuteTemplate($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putExecuteTemplateOnline
     *
     * Populate document template with data online..
     *
     */
    public function testPutExecuteTemplateOnline()
    {
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/MailMerge/' . "SampleExecuteTemplate.docx";
        $data = realpath(__DIR__ . '/../../../..') . '/TestData/MailMerge/' . "SampleExecuteTemplateData.txt";
        $request = new Requests\PutExecuteTemplateOnlineRequest($file, $data);

        $result = $this->words->putExecuteTemplateOnline($request);
        Assert::assertNotNull($result, "Error occurred while executing template");
    }
}