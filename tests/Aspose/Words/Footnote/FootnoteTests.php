<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FootnoteTests.php">
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
use Aspose\Words\Model\Footnote;
use PHPUnit\Framework\Assert;

class FootnoteTests extends \PHPUnit_Framework_TestCase
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
     * Test case for getFootnote
     *
     * Read footnote by index..
     *
     */
    public function testGetFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Footnote/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetFootnoteRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null,"");

        $result = $this->words->getFootnote($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getFootnotes
     *
     * Get footnotes from document..
     *
     */
    public function testGetFootnotes()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnotes.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Footnote/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetFootnotesRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getFootnotes($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteFootnote
     *
     * Removes footnote from document..
     *
     */
    public function testDeleteFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestDeleteFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Footnote/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteFootnoteRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, "");

        $result = $this->words->deleteFootnote($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postFootnote
     *
     * Updates footnote's properties, returns updated run's data..
     *
     */
    public function testPostFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestPostFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $footNote = new Footnote(array("text" => "new text is here"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Footnote/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostFootnoteRequest($remoteName, $footNote, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, "");

        $result = $this->words->postFootnote($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putFootnote
     *
     * Adds footnote to document, returns added footnote's data..
     *
     */
    public function testPutFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestPutFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $footnote = new Footnote(array("footnote_type" => Footnote::FOOTNOTE_TYPE_ENDNOTE, "text" => "test endnote"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Footnote/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PutFootnoteRequest($remoteName, $footnote, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, "");

        $result = $this->words->putFootnote($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}