<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="PageSetupTests.php">
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
use Aspose\Words\Model\PageSetup;
use PHPUnit\Framework\Assert;

class PageSetupTests extends \PHPUnit_Framework_TestCase
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
     * Test case for getSectionPageSetup
     *
     * Get page setup of section..
     *
     */
    public function testGetSectionPageSetup()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetSectionPageSetup.docx";
        $subfolder = "DocumentElements/PageSetup";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetSectionPageSetupRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getSectionPageSetup($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for updateSectionPageSetup
     *
     * Update page setup of section..
     *
     */
    public function testUpdateSectionPageSetup()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestUpdateSectionPageSetup.docx";
        $subfolder = "DocumentElements/PageSetup";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $body = new PageSetup(array(
            "rtl_gutter" => true,
            "left_margin" => 10,
            "orientation" => PageSetup::ORIENTATION_LANDSCAPE,
            "paper_size" => PageSetup::PAPER_SIZE_A5
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\UpdateSectionPageSetupRequest($remoteName, $index, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->updateSectionPageSetup($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for renderPage
     *
     * Renders page to specified format..
     *
     */
    public function testRenderPage()
    {
        $localName = "SampleWordDocument.docx";
        $remoteName = "TestRenderPage.docx";
        $subfolder = "DocumentElements/PageSetup";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $pageNumber = 1;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Text/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\RenderPageRequest($remoteName, $pageNumber, $format, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->renderPage($request);
        Assert::assertNotNull($result, "Error occurred while page rendering");
    }
}