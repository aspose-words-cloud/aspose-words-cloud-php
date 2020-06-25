<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FootnoteTests.php">
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
 * Example of how to work with footnotes.
 */
class FootnoteTests extends BaseTestContext
{
    private static $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Footnotes";
    private static $footnoteFolder = "DocumentElements/Footnotes";

    /*
     * Test for adding footnote.
     */
    public function testInsertFootnote()
    {
        $remoteFileName = "TestInsertFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
            "footnote_type" => "Endnote",
            "text" => "test endnote",
        ));
        $request = new Requests\InsertFootnoteRequest(
            $remoteFileName,
            $requestFootnoteDto,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding footnote without node path.
     */
    public function testInsertFootnoteWithoutNodePath()
    {
        $remoteFileName = "TestInsertFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
            "footnote_type" => "Endnote",
            "text" => "test endnote",
        ));
        $request = new Requests\InsertFootnoteWithoutNodePathRequest(
            $remoteFileName,
            $requestFootnoteDto,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting footnote.
     */
    public function testDeleteFootnote()
    {
        $remoteFileName = "TestDeleteFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFootnoteRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFootnote($request);
    }

    /*
     * Test for deleting footnote without node path.
     */
    public function testDeleteFootnoteWithoutNodePath()
    {
        $remoteFileName = "TestDeleteFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFootnoteWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFootnoteWithoutNodePath($request);
    }

    /*
     * Test for getting footnotes.
     */
    public function testGetFootnotes()
    {
        $remoteFileName = "TestGetFootnotes.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnotesRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnotes($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting footnotes without node path.
     */
    public function testGetFootnotesWithoutNodePath()
    {
        $remoteFileName = "TestGetFootnotesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnotesWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnotesWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting footnote.
     */
    public function testGetFootnote()
    {
        $remoteFileName = "TestGetFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnoteRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting footnote without node path.
     */
    public function testGetFootnoteWithoutNodePath()
    {
        $remoteFileName = "TestGetFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnoteWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating footnote.
     */
    public function testUpdateFootnote()
    {
        $remoteFileName = "TestUpdateFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
            "text" => "new text is here",
        ));
        $request = new Requests\UpdateFootnoteRequest(
            $remoteFileName,
            $requestFootnoteDto,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating footnote without node path.
     */
    public function testUpdateFootnoteWithoutNodePath()
    {
        $remoteFileName = "TestUpdateFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
            "text" => "new text is here",
        ));
        $request = new Requests\UpdateFootnoteWithoutNodePathRequest(
            $remoteFileName,
            $requestFootnoteDto,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}