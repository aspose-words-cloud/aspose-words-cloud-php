<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ParagraphTests.php">
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
 * Example of how to work with paragraph.
 */
class ParagraphTests extends BaseTestContext
{
    /*
     * Test for getting paragraph.
     */
    public function testGetDocumentParagraphByIndex()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphByIndex.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph without node path.
     */
    public function testGetDocumentParagraphByIndexWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphByIndexWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting all paragraphs.
     */
    public function testGetDocumentParagraphs()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting all paragraphs without node path.
     */
    public function testGetDocumentParagraphsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph run.
     */
    public function testGetDocumentParagraphRun()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphRun.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetRunRequest(
            $remoteFileName,
            "paragraphs/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph run font.
     */
    public function testGetDocumentParagraphRunFont()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphRunFont.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetRunFontRequest(
            $remoteFileName,
            "paragraphs/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRunFont($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph runs.
     */
    public function testGetParagraphRuns()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetParagraphRuns.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetRunsRequest(
            $remoteFileName,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRuns($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating paragraph run font.
     */
    public function testUpdateRunFont()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateRunFont.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFontDto = new \Aspose\Words\Model\Font(array(
            "bold" => true,
        ));
        $request = new Requests\UpdateRunFontRequest(
            $remoteFileName,
            $requestFontDto,
            "paragraphs/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateRunFont($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding paragraph.
     */
    public function testInsertParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
            "text" => "This is a new paragraph for your document",
        ));
        $request = new Requests\InsertParagraphRequest(
            $remoteFileName,
            $requestParagraph,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding paragraph without node path.
     */
    public function testInsertParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
            "text" => "This is a new paragraph for your document",
        ));
        $request = new Requests\InsertParagraphWithoutNodePathRequest(
            $remoteFileName,
            $requestParagraph,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertParagraphWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for paragraph rendering.
     */
    public function testRenderParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestRenderParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderParagraphRequest(
            $remoteFileName,
            "png",
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderParagraph($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for paragraph rendering without node path.
     */
    public function testRenderParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestRenderParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderParagraphWithoutNodePathRequest(
            $remoteFileName,
            "png",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderParagraphWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting paragraph format settings.
     */
    public function testGetParagraphFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphFormatRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph format settings without node path.
     */
    public function testGetParagraphFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphFormatWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphFormatWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating  paragraph format settings.
     */
    public function testUpdateParagraphFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
            "alignment" => "Right",
        ));
        $request = new Requests\UpdateParagraphFormatRequest(
            $remoteFileName,
            $requestDto,
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

        $result = $this->words->updateParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting  a paragraph.
     */
    public function testDeleteParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphRequest(
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

    $this->words->deleteParagraph($request);
    }

    /*
     * Test for deleting  a paragraph without node path.
     */
    public function testDeleteParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphWithoutNodePathRequest(
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

    $this->words->deleteParagraphWithoutNodePath($request);
    }

    /*
     * Test for getting paragraph list format.
     */
    public function testGetParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestParagraphGetListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphGetListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphListFormatRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph list format without node path.
     */
    public function testGetParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestParagraphGetListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphGetListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphListFormatWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphListFormatWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating paragraph list format.
     */
    public function testUpdateParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestUpdateParagraphListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphUpdateListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDto = new \Aspose\Words\Model\ListFormatUpdate(array(
            "list_id" => 2,
        ));
        $request = new Requests\UpdateParagraphListFormatRequest(
            $remoteFileName,
            $requestDto,
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

        $result = $this->words->updateParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating paragraph list format without node path.
     */
    public function testUpdateParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestUpdateParagraphListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphUpdateListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDto = new \Aspose\Words\Model\ListFormatUpdate(array(
            "list_id" => 2,
        ));
        $request = new Requests\UpdateParagraphListFormatWithoutNodePathRequest(
            $remoteFileName,
            $requestDto,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateParagraphListFormatWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting paragraph list format.
     */
    public function testDeleteParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestDeleteParagraphListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphDeleteListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphListFormatRequest(
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

        $result = $this->words->deleteParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting paragraph list format without node path.
     */
    public function testDeleteParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestDeleteParagraphListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $listFolder . "/ParagraphDeleteListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphListFormatWithoutNodePathRequest(
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

        $result = $this->words->deleteParagraphListFormatWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph tab stops.
     */
    public function testGetParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestGetParagraphTabStops.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphTabStopsRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph tab stops without node path.
     */
    public function testGetParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestGetParagraphTabStopsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphTabStopsWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphTabStopsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for inserting paragraph tab stop.
     */
    public function testInsertParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestInsertOrUpdateParagraphTabStop.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDto = new \Aspose\Words\Model\TabStopInsert(array(
            "alignment" => "Left",
            "leader" => "None",
            "position" => 72,
        ));
        $request = new Requests\InsertOrUpdateParagraphTabStopRequest(
            $remoteFileName,
            $requestDto,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertOrUpdateParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for inserting paragraph tab stop without node path.
     */
    public function testInsertParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestInsertOrUpdateParagraphTabStopWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDto = new \Aspose\Words\Model\TabStopInsert(array(
            "alignment" => "Left",
            "leader" => "None",
            "position" => 72,
        ));
        $request = new Requests\InsertOrUpdateParagraphTabStopWithoutNodePathRequest(
            $remoteFileName,
            $requestDto,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertOrUpdateParagraphTabStopWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting all paragraph tab stops.
     */
    public function testDeleteAllParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteAllParagraphTabStops.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteAllParagraphTabStopsRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteAllParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting all paragraph tab stops without node path.
     */
    public function testDeleteAllParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteAllParagraphTabStopsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteAllParagraphTabStopsWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteAllParagraphTabStopsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting a tab stops.
     */
    public function testDeleteParagraphTabStop()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteParagraphTabStop.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphTabStopRequest(
            $remoteFileName,
            72,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting a tab stops without node path.
     */
    public function testDeleteParagraphTabStopWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteParagraphTabStopWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphTabStopWithoutNodePathRequest(
            $remoteFileName,
            72,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphTabStopWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}