<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FootnoteTests.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with footnotes.
 */
class FootnoteTests extends BaseTestContext
{
    /*
     * Test for adding footnote.
     */
    public function testInsertFootnote()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestInsertFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
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
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals("0.1.7.1", $result->getFootnote()->getNodeId());
        Assert::assertEquals(" test endnote" . "\r\n", $result->getFootnote()->getText());
    }

    /*
     * Test for adding footnote online.
     */
    public function testInsertFootnoteOnline()
    {
        $footnoteFolder = "DocumentElements/Footnotes";

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
            "footnote_type" => "Endnote",
            "text" => "test endnote",
        ));
        $request = new Requests\InsertFootnoteOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $footnoteFolder . "/Footnote.doc",
            $requestFootnoteDto,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFootnoteOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for adding footnote without node path.
     */
    public function testInsertFootnoteWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestInsertFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
            "footnote_type" => "Endnote",
            "text" => "test endnote",
        ));
        $request = new Requests\InsertFootnoteRequest(
            $remoteFileName,
            $requestFootnoteDto,
            NULL,
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
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals("0.1.7.1", $result->getFootnote()->getNodeId());
        Assert::assertEquals(" test endnote" . "\r\n", $result->getFootnote()->getText());
    }

    /*
     * Test for deleting footnote.
     */
    public function testDeleteFootnote()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestDeleteFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFootnoteRequest(
            $remoteFileName,
            0,
            "",
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
     * Test for deleting footnote online.
     */
    public function testDeleteFootnoteOnline()
    {
        $footnoteFolder = "DocumentElements/Footnotes";

        $request = new Requests\DeleteFootnoteOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $footnoteFolder . "/Footnote.doc",
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteFootnoteOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting footnote without node path.
     */
    public function testDeleteFootnoteWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestDeleteFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFootnoteRequest(
            $remoteFileName,
            0,
            NULL,
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
     * Test for getting footnotes.
     */
    public function testGetFootnotes()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestGetFootnotes.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
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
        Assert::assertNotNull($result->getFootnotes());
        Assert::assertNotNull($result->getFootnotes()->getList());
        Assert::assertCount(6, $result->getFootnotes()->getList());
        Assert::assertEquals(" Footnote 1." . "\r\n", $result->getFootnotes()->getList()[0]->getText());
    }

    /*
     * Test for getting footnotes online.
     */
    public function testGetFootnotesOnline()
    {
        $footnoteFolder = "DocumentElements/Footnotes";

        $request = new Requests\GetFootnotesOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $footnoteFolder . "/Footnote.doc",
            "",
            NULL,
            NULL
        );

        $result = $this->words->getFootnotesOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting footnotes without node path.
     */
    public function testGetFootnotesWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestGetFootnotesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnotesRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnotes($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFootnotes());
        Assert::assertNotNull($result->getFootnotes()->getList());
        Assert::assertCount(6, $result->getFootnotes()->getList());
        Assert::assertEquals(" Footnote 1." . "\r\n", $result->getFootnotes()->getList()[0]->getText());
    }

    /*
     * Test for getting footnote.
     */
    public function testGetFootnote()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestGetFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnoteRequest(
            $remoteFileName,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals(" Footnote 1." . "\r\n", $result->getFootnote()->getText());
    }

    /*
     * Test for getting footnote online.
     */
    public function testGetFootnoteOnline()
    {
        $footnoteFolder = "DocumentElements/Footnotes";

        $request = new Requests\GetFootnoteOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $footnoteFolder . "/Footnote.doc",
            0,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getFootnoteOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting footnote without node path.
     */
    public function testGetFootnoteWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestGetFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFootnoteRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals(" Footnote 1." . "\r\n", $result->getFootnote()->getText());
    }

    /*
     * Test for updating footnote.
     */
    public function testUpdateFootnote()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestUpdateFootnote.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
            "text" => "new text is here",
        ));
        $request = new Requests\UpdateFootnoteRequest(
            $remoteFileName,
            0,
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

        $result = $this->words->updateFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals(" new text is here" . "\r\n", $result->getFootnote()->getText());
    }

    /*
     * Test for updating footnote online.
     */
    public function testUpdateFootnoteOnline()
    {
        $footnoteFolder = "DocumentElements/Footnotes";

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
            "text" => "new text is here",
        ));
        $request = new Requests\UpdateFootnoteOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $footnoteFolder . "/Footnote.doc",
            $requestFootnoteDto,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFootnoteOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for updating footnote without node path.
     */
    public function testUpdateFootnoteWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Footnotes";
        $footnoteFolder = "DocumentElements/Footnotes";
        $remoteFileName = "TestUpdateFootnoteWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $footnoteFolder . "/Footnote.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
            "text" => "new text is here",
        ));
        $request = new Requests\UpdateFootnoteRequest(
            $remoteFileName,
            0,
            $requestFootnoteDto,
            NULL,
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
        Assert::assertNotNull($result->getFootnote());
        Assert::assertEquals(" new text is here" . "\r\n", $result->getFootnote()->getText());
    }
}