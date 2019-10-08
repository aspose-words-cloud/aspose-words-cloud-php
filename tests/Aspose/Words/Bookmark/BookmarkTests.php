<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BookmarkTests.php">
*   Copyright (c) 2019 Aspose.Words for Cloud
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
namespace Aspose\Tests;

use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;
class BookmarkTests extends BaseTestContext
{
    /**
     * Test case for getBookmarkByName
     *
     * Read document bookmark data by its name..
     *
     */
    public function testGetBookmarkByName()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetBookmarkByName.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $bookmarkName = "aspose";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetBookmarkByNameRequest($remoteName, $bookmarkName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getBookmarkByName($request);
        Assert::greaterThan(0, count(json_decode($result, true)['Bookmark']));
    }

    /**
     * Test case for getBookmarks
     *
     * Read document bookmarks common info..
     *
     */
    public function testGetBookmarks()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetBookmarks.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;

        $this->uploadFile($file, $fullName);

        $request = new Requests\GetBookmarksRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getBookmarks($request);
        Assert::isFalse(json_decode($result, true) == NULL);

    }

    /**
     * Test case for updateBookmark
     *
     * Update document bookmark..
     *
     */
    public function testUpdateBookmark()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestUpdateBookmark.docx";
        $subfolder = "DocumentElements/Bookmarks";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $bookmarkName = "aspose";
        $body = new BookmarkData(array("name" => $bookmarkName, "text" => "This will be the text for Aspose"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateBookmarkRequest($remoteName, $body, $bookmarkName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->updateBookmark($request);
        Assert::isTrue(json_decode($result, true)["Bookmark"] !== NULL);

    }
}