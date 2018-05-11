<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BookmarkTests.php">
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
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php";
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;
class BookmarkTests extends BaseTest\BaseTestContext
{
    /**
     * Test case for getDocumentBookmarkByName
     *
     * Read document bookmark data by its name..
     *
     */
    public function testGetDocumentBookmarkByName()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentBookmarkByName.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $bookmarkName = "aspose";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new Requests\GetDocumentBookmarkByNameRequest($remoteName, $bookmarkName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentBookmarkByName($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getDocumentBookmarks
     *
     * Read document bookmarks common info..
     *
     */
    public function testGetDocumentBookmarks()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentBookmarks.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new Requests\GetDocumentBookmarksRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentBookmarks($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);

    }

    /**
     * Test case for postUpdateDocumentBookmark
     *
     * Update document bookmark..
     *
     */
    public function testPostUpdateDocumentBookmark()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostUpdateDocumentBookmark.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $bookmarkName = "aspose";
        $body = new BookmarkData(array("name" => $bookmarkName, "text" => "This will be the text for Aspose"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->storage->PutCreate($putRequest);

        $request = new Requests\PostUpdateDocumentBookmarkRequest($remoteName, $body, $bookmarkName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->postUpdateDocumentBookmark($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);

    }
}