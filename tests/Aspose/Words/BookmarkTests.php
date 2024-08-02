<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BookmarkTests.php">
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
use Aspose\Words\Model\Requests\{DeleteBookmarkOnlineRequest, DeleteBookmarkRequest, DeleteBookmarksOnlineRequest, DeleteBookmarksRequest, GetBookmarkByNameOnlineRequest, GetBookmarkByNameRequest, GetBookmarksOnlineRequest, GetBookmarksRequest, InsertBookmarkOnlineRequest, InsertBookmarkRequest, UpdateBookmarkOnlineRequest, UpdateBookmarkRequest};
use Aspose\Words\Model\{BookmarkData, BookmarkInsert, PositionInsideNode};
use PHPUnit\Framework\Assert;

/*
 * Example of how to get all bookmarks from document.
 */
class BookmarkTests extends BaseTestContext
{
    /*
     * Test for getting bookmarks from document.
     */
    public function testGetBookmarks()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentBookmarks.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetBookmarksRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarks($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting bookmarks from document online.
     */
    public function testGetBookmarksOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetBookmarksOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarksOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting bookmark by specified name.
     */
    public function testGetBookmarkByName()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";
        $remoteFileName = "TestGetDocumentBookmarkByName.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetBookmarkByNameRequest(
            $remoteFileName,
            $bookmarkName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarkByName($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting bookmark by specified name online.
     */
    public function testGetBookmarkByNameOnline()
    {
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetBookmarkByNameOnlineRequest(
            $requestDocument,
            $bookmarkName,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarkByNameOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating existed bookmark.
     */
    public function testUpdateBookmark()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";
        $remoteFileName = "TestUpdateDocumentBookmark.docx";
        $bookmarkText = "This will be the text for Aspose";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestBookmarkData = new BookmarkData(array(
            "name" => $bookmarkName,
            "text" => $bookmarkText,
        ));
        $request = new UpdateBookmarkRequest(
            $remoteFileName,
            $bookmarkName,
            $requestBookmarkData,
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

        $result = $this->words->updateBookmark($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating existed bookmark online.
     */
    public function testUpdateBookmarkOnline()
    {
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";
        $remoteFileName = "TestUpdateDocumentBookmark.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestBookmarkData = new BookmarkData(array(
            "name" => $bookmarkName,
            "text" => "This will be the text for Aspose",
        ));
        $request = new UpdateBookmarkOnlineRequest(
            $requestDocument,
            $bookmarkName,
            $requestBookmarkData,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateBookmarkOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for deleting bookmark by specified name.
     */
    public function testDeleteBookmark()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";
        $remoteFileName = "TestDeleteBookmark.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteBookmarkRequest(
            $remoteFileName,
            $bookmarkName,
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

        Assert::assertNull($this->words->deleteBookmark($request));
    }

    /*
     * Test for deleting bookmark by specified name online.
     */
    public function testDeleteBookmarkOnline()
    {
        $localFile = "Common/test_multi_pages.docx";
        $bookmarkName = "aspose";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteBookmarkOnlineRequest(
            $requestDocument,
            $bookmarkName,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteBookmarkOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting all bookmarks from document.
     */
    public function testDeleteBookmarks()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteBookmarks.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteBookmarksRequest(
            $remoteFileName,
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

        Assert::assertNull($this->words->deleteBookmarks($request));
    }

    /*
     * Test for deleting all bookmarks from document online.
     */
    public function testDeleteBookmarksOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteBookmarksOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteBookmarksOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for inserting new bookmark.
     */
    public function testInsertBookmark()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertBookmark.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestBookmarkStartRange = new PositionInsideNode(array(
            "node_id" => "0.0.0.0",
            "offset" => 0,
        ));
        $requestBookmarkEndRange = new PositionInsideNode(array(
            "node_id" => "0.0.0.0",
            "offset" => 0,
        ));
        $requestBookmark = new BookmarkInsert(array(
            "start_range" => $requestBookmarkStartRange,
            "end_range" => $requestBookmarkEndRange,
            "name" => "new_bookmark",
            "text" => "Some text",
        ));
        $request = new InsertBookmarkRequest(
            $remoteFileName,
            $requestBookmark,
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

        $result = $this->words->insertBookmark($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for inserting new bookmark online.
     */
    public function testInsertBookmarkOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestBookmarkStartRange = new PositionInsideNode(array(
            "node_id" => "0.0.0.0",
            "offset" => 0,
        ));
        $requestBookmarkEndRange = new PositionInsideNode(array(
            "node_id" => "0.0.0.0",
            "offset" => 0,
        ));
        $requestBookmark = new BookmarkInsert(array(
            "start_range" => $requestBookmarkStartRange,
            "end_range" => $requestBookmarkEndRange,
            "name" => "new_bookmark",
            "text" => "Some text",
        ));
        $request = new InsertBookmarkOnlineRequest(
            $requestDocument,
            $requestBookmark,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertBookmarkOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}