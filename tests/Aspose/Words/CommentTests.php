<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CommentTests.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{DeleteCommentOnlineRequest, DeleteCommentRequest, DeleteCommentsOnlineRequest, DeleteCommentsRequest, GetCommentOnlineRequest, GetCommentRequest, GetCommentsOnlineRequest, GetCommentsRequest, InsertCommentOnlineRequest, InsertCommentRequest, UpdateCommentOnlineRequest, UpdateCommentRequest};
use Aspose\Words\Model\{CommentInsert, CommentUpdate, PositionInsideNode};
use PHPUnit\Framework\Assert;

/*
 * Example of how to get comments from document.
 */
class CommentTests extends BaseTestContext
{
    /*
     * Test for getting comment by specified comment's index.
     */
    public function testGetComment()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetCommentRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getComment($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getComment());
        Assert::assertEquals("Comment 1" . "\r\n\r\n", $result->getComment()->getText());
    }

    /*
     * Test for getting comment by specified comment's index online.
     */
    public function testGetCommentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetCommentOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCommentOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting all comments from document.
     */
    public function testGetComments()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetComments.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetCommentsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getComments($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getComments());
        Assert::assertNotNull($result->getComments()->getCommentList());
        Assert::assertCount(1, $result->getComments()->getCommentList());
        Assert::assertEquals("Comment 1" . "\r\n\r\n", $result->getComments()->getCommentList()[0]->getText());
    }

    /*
     * Test for getting all comments from document online.
     */
    public function testGetCommentsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetCommentsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCommentsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding comment.
     */
    public function testInsertComment()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCommentRangeStart = new PositionInsideNode(array(
            "node_id" => "0.3.0.3",
            "offset" => 0,
        ));
        $requestCommentRangeEnd = new PositionInsideNode(array(
            "node_id" => "0.3.0.3",
            "offset" => 0,
        ));
        $requestComment = new CommentInsert(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new InsertCommentRequest(
            $remoteFileName,
            $requestComment,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertComment($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getComment());
        Assert::assertEquals("A new Comment" . "\r\n", $result->getComment()->getText());
        Assert::assertNotNull($result->getComment()->getRangeStart());
        Assert::assertNotNull($result->getComment()->getRangeStart()->getNode());
        Assert::assertEquals("0.3.0.4", $result->getComment()->getRangeStart()->getNode()->getNodeId());
    }

    /*
     * Test for adding comment online.
     */
    public function testInsertCommentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestCommentRangeStart = new PositionInsideNode(array(
            "node_id" => "0.3.0.3",
            "offset" => 0,
        ));
        $requestCommentRangeEnd = new PositionInsideNode(array(
            "node_id" => "0.3.0.3",
            "offset" => 0,
        ));
        $requestComment = new CommentInsert(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new InsertCommentOnlineRequest(
            $requestDocument,
            $requestComment,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertCommentOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for updating comment.
     */
    public function testUpdateComment()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCommentRangeStart = new PositionInsideNode(array(
            "node_id" => "0.3.0",
            "offset" => 0,
        ));
        $requestCommentRangeEnd = new PositionInsideNode(array(
            "node_id" => "0.3.0",
            "offset" => 0,
        ));
        $requestComment = new CommentUpdate(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new UpdateCommentRequest(
            $remoteFileName,
            0,
            $requestComment,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateComment($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getComment());
        Assert::assertEquals("A new Comment" . "\r\n", $result->getComment()->getText());
        Assert::assertNotNull($result->getComment()->getRangeStart());
        Assert::assertNotNull($result->getComment()->getRangeStart()->getNode());
        Assert::assertEquals("0.3.0.1", $result->getComment()->getRangeStart()->getNode()->getNodeId());
    }

    /*
     * Test for updating comment online.
     */
    public function testUpdateCommentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestCommentRangeStart = new PositionInsideNode(array(
            "node_id" => "0.3.0",
            "offset" => 0,
        ));
        $requestCommentRangeEnd = new PositionInsideNode(array(
            "node_id" => "0.3.0",
            "offset" => 0,
        ));
        $requestComment = new CommentUpdate(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new UpdateCommentOnlineRequest(
            $requestDocument,
            0,
            $requestComment,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateCommentOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * A test for DeleteComment.
     */
    public function testDeleteComment()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteCommentRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteComment($request));
    }

    /*
     * A test for DeleteComment online.
     */
    public function testDeleteCommentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteCommentOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteCommentOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * A test for DeleteComments.
     */
    public function testDeleteComments()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Comments";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteCommentsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteComments($request));
    }

    /*
     * A test for DeleteComments online.
     */
    public function testDeleteCommentsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteCommentsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteCommentsOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}