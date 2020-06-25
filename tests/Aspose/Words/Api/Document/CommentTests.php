<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CommentTests.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
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

namespace Aspose\Tests;

use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;

/*
 * Example of how to get comments from document.
 */
class CommentTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/Comments";
    private static $localFile = "Common/test_multi_pages.docx";

    /*
     * Test for getting comment by specified comment's index.
     */
    public function testGetComment()
    {
        $remoteFileName = "TestGetComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetCommentRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getComment($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting all comments from document.
     */
    public function testGetComments()
    {
        $remoteFileName = "TestGetComments.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetCommentsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getComments($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding comment.
     */
    public function testInsertComment()
    {
        $remoteFileName = "TestInsertComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
            "node_id" => "0.3.0.3",
        ));
        $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
            "node" => $requestCommentRangeStartNode,
            "offset" => 0,
        ));
        $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
            "node_id" => "0.3.0.3",
        ));
        $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
            "node" => $requestCommentRangeEndNode,
            "offset" => 0,
        ));
        $requestComment = new \Aspose\Words\Model\CommentInsert(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new Requests\InsertCommentRequest(
            $remoteFileName,
            $requestComment,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertComment($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating comment.
     */
    public function testUpdateComment()
    {
        $remoteFileName = "TestUpdateComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
            "node_id" => "0.3.0",
        ));
        $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
            "node" => $requestCommentRangeStartNode,
            "offset" => 0,
        ));
        $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
            "node_id" => "0.3.0",
        ));
        $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
            "node" => $requestCommentRangeEndNode,
            "offset" => 0,
        ));
        $requestComment = new \Aspose\Words\Model\CommentUpdate(array(
            "range_start" => $requestCommentRangeStart,
            "range_end" => $requestCommentRangeEnd,
            "initial" => "IA",
            "author" => "Imran Anwar",
            "text" => "A new Comment",
        ));
        $request = new Requests\UpdateCommentRequest(
            $remoteFileName,
            0,
            $requestComment,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateComment($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * A test for DeleteComment.
     */
    public function testDeleteComment()
    {
        $remoteFileName = "TestDeleteComment.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteCommentRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

    $this->words->deleteComment($request);
    }
}