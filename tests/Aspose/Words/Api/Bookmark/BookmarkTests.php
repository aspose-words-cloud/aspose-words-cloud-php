<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BookmarkTests.php">
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetBookmarksRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarks($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getBookmarks());
        Assert::assertCount(3, $result->getBookmarks()->getBookmarkList());
        Assert::assertEquals("aspose", $result->getBookmarks()->getBookmarkList()[1]->getName());
    }

    /*
     * Test for getting bookmark by specified name.
     */
    public function testGetBookmarkByName()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentBookmarkByName.docx";
        $bookmarkName = "aspose";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetBookmarkByNameRequest(
            $remoteFileName,
            $bookmarkName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBookmarkByName($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getBookmark());
        Assert::assertEquals($bookmarkName, $result->getBookmark()->getName());
    }

    /*
     * Test for updating existed bookmark.
     */
    public function testUpdateBookmark()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Bookmarks";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateDocumentBookmark.docx";
        $bookmarkName = "aspose";
        $bookmarkText = "This will be the text for Aspose";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
            "name" => $bookmarkName,
            "text" => $bookmarkText,
        ));
        $request = new Requests\UpdateBookmarkRequest(
            $remoteFileName,
            $requestBookmarkData,
            $bookmarkName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateBookmark($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getBookmark());
        Assert::assertEquals($bookmarkName, $result->getBookmark()->getName());
        Assert::assertEquals($bookmarkText, $result->getBookmark()->getText());
    }
}