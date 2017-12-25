<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CommentTests.php">
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
use Aspose\Words\Model\NodeLink;
use Aspose\Words\Model\DocumentPosition;
use Aspose\Words\Model\Comment;
use PHPUnit\Framework\Assert;
class CommentTests extends \PHPUnit_Framework_TestCase
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
     * Test case for deleteComment
     *
     * Remove comment from document..
     *
     */
    public function testDeleteComment()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteComment.docx";
        $subfolder = "DocumentElements/Comments";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteCommentRequest($remoteName, 0, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteComment($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getComment
     *
     * Get comment from document..
     *
     */
    public function testGetComment()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetComment.docx";
        $subfolder = "DocumentElements/Comments";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetCommentRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getComment($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getComments
     *
     * Get comments from document..
     *
     */
    public function testGetComments()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetComments.docx";
        $subfolder = "DocumentElements/Comments";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetCommentsRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getComments($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for postComment
     *
     * Updates the comment, returns updated comment's data..
     *
     */
    public function testPostComment()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostComment.docx";
        $subfolder = "DocumentElements/Comments";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $nodeLink = new NodeLink(array("node_id" => "0.0.3"));
        $documentPosition = new DocumentPosition(array("node" => $nodeLink, "offset" => 0));
        $body = new Comment(array("range_start" => $documentPosition,
            "range_end" => $documentPosition,"initial" => "IA",
            "author" => "Imran Anwar", "text" => "A new Comment"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostCommentRequest($remoteName, $index, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->postComment($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for putComment
     *
     * Adds comment to document, returns inserted comment's data..
     *
     */
    public function testPutComment()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutComment.docx";
        $subfolder = "DocumentElements/Comments";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $nodeLink = new NodeLink(array("node_id" => "0.0.3"));
        $documentPosition = new DocumentPosition(array("node" => $nodeLink, "offset" => 0));
        $body = new Comment(array(
            "range_start" => $documentPosition,
            "range_end" => $documentPosition,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new comment"
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PutCommentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->putComment($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}