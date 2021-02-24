<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ParagraphTests.php">
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
 * Example of how to work with paragraph.
 */
class ParagraphTests extends BaseTestContext
{
    /*
     * Test for getting paragraph.
     */
    public function testGetDocumentParagraphByIndex()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphByIndex.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphRequest(
            $remoteFileName,
            0,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getParagraph());
        Assert::assertEquals("0.0.0", $result->getParagraph()->getNodeId());
    }

    /*
     * Test for getting paragraph online.
     */
    public function testGetDocumentParagraphOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetParagraphOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            "sections/0",
            NULL,
            NULL
        );

        $result = $this->words->getParagraphOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph without node path.
     */
    public function testGetDocumentParagraphByIndexWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphByIndexWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getParagraph());
        Assert::assertEquals("0.0.0", $result->getParagraph()->getNodeId());
    }

    /*
     * Test for getting all paragraphs.
     */
    public function testGetDocumentParagraphs()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
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
        Assert::assertNotNull($result->getParagraphs());
        Assert::assertNotNull($result->getParagraphs()->getParagraphLinkList());
        Assert::assertCount(15, $result->getParagraphs()->getParagraphLinkList());
        Assert::assertEquals("Page 1 of 3", $result->getParagraphs()->getParagraphLinkList()[0]->getText());
    }

    /*
     * Test for getting all paragraphs online.
     */
    public function testGetDocumentParagraphsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetParagraphsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0",
            NULL,
            NULL
        );

        $result = $this->words->getParagraphsOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting all paragraphs without node path.
     */
    public function testGetDocumentParagraphsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getParagraphs());
        Assert::assertNotNull($result->getParagraphs()->getParagraphLinkList());
        Assert::assertCount(15, $result->getParagraphs()->getParagraphLinkList());
        Assert::assertEquals("Page 1 of 3", $result->getParagraphs()->getParagraphLinkList()[0]->getText());
    }

    /*
     * Test for getting paragraph run.
     */
    public function testGetDocumentParagraphRun()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphRun.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
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
        Assert::assertNotNull($result->getRun());
        Assert::assertEquals("Page ", $result->getRun()->getText());
    }

    /*
     * Test for getting paragraph run online.
     */
    public function testGetDocumentParagraphRunOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetRunOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "paragraphs/0",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getRunOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph run font.
     */
    public function testGetDocumentParagraphRunFont()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphRunFont.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
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
        Assert::assertNotNull($result->getFont());
        Assert::assertEquals("Times New Roman", $result->getFont()->getName());
    }

    /*
     * Test for getting paragraph run font online.
     */
    public function testGetDocumentParagraphRunFontOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetRunFontOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "paragraphs/0",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getRunFontOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph runs.
     */
    public function testGetParagraphRuns()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetParagraphRuns.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
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
        Assert::assertNotNull($result->getRuns());
        Assert::assertNotNull($result->getRuns()->getList());
        Assert::assertCount(6, $result->getRuns()->getList());
        Assert::assertEquals("Page ", $result->getRuns()->getList()[0]->getText());
    }

    /*
     * Test for getting paragraph runs online.
     */
    public function testGetParagraphRunsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetRunsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/paragraphs/0",
            NULL,
            NULL
        );

        $result = $this->words->getRunsOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating paragraph run font.
     */
    public function testUpdateRunFont()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateRunFont.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFontDto = new \Aspose\Words\Model\Font(array(
            "bold" => true,
        ));
        $request = new Requests\UpdateRunFontRequest(
            $remoteFileName,
            "paragraphs/0",
            0,
            $requestFontDto,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateRunFont($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFont());
        Assert::assertTrue($result->getFont()->getBold());
    }

    /*
     * Test for updating paragraph run font online.
     */
    public function testUpdateRunFontOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestFontDto = new \Aspose\Words\Model\Font(array(
            "bold" => true,
        ));
        $request = new Requests\UpdateRunFontOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "paragraphs/0",
            $requestFontDto,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateRunFontOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for adding paragraph.
     */
    public function testInsertParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
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
        Assert::assertNotNull($result->getParagraph());
        Assert::assertEquals("0.3.8", $result->getParagraph()->getNodeId());
    }

    /*
     * Test for adding paragraph online.
     */
    public function testInsertParagraphOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
            "text" => "This is a new paragraph for your document",
        ));
        $request = new Requests\InsertParagraphOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestParagraph,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertParagraphOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for adding paragraph without node path.
     */
    public function testInsertParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
            "text" => "This is a new paragraph for your document",
        ));
        $request = new Requests\InsertParagraphRequest(
            $remoteFileName,
            $requestParagraph,
            NULL,
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
        Assert::assertNotNull($result->getParagraph());
        Assert::assertEquals("0.3.8", $result->getParagraph()->getNodeId());
    }

    /*
     * Test for paragraph rendering.
     */
    public function testRenderParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestRenderParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderParagraphRequest(
            $remoteFileName,
            "png",
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderParagraph($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for paragraph rendering.
     */
    public function testRenderParagraphOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\RenderParagraphOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "png",
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderParagraphOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for paragraph rendering without node path.
     */
    public function testRenderParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestRenderParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderParagraphRequest(
            $remoteFileName,
            "png",
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderParagraph($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting paragraph format settings.
     */
    public function testGetParagraphFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphFormatRequest(
            $remoteFileName,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getParagraphFormat());
        Assert::assertEquals("Normal", $result->getParagraphFormat()->getStyleName());
    }

    /*
     * Test for getting paragraph format settings online.
     */
    public function testGetParagraphFormatOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetParagraphFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getParagraphFormatOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph format settings without node path.
     */
    public function testGetParagraphFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphFormatRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getParagraphFormat());
        Assert::assertEquals("Normal", $result->getParagraphFormat()->getStyleName());
    }

    /*
     * Test for updating  paragraph format settings.
     */
    public function testUpdateParagraphFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentParagraphs.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
            "alignment" => "Right",
        ));
        $request = new Requests\UpdateParagraphFormatRequest(
            $remoteFileName,
            0,
            $requestParagraphFormatDto,
            "",
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
        Assert::assertNotNull($result->getParagraphFormat());

    }

    /*
     * Test for updating  paragraph format settings online.
     */
    public function testUpdateParagraphFormatOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
            "alignment" => "Right",
        ));
        $request = new Requests\UpdateParagraphFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestParagraphFormatDto,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateParagraphFormatOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for deleting  a paragraph.
     */
    public function testDeleteParagraph()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraph.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphRequest(
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

    $this->words->deleteParagraph($request);
    }

    /*
     * Test for deleting  a paragraph online.
     */
    public function testDeleteParagraphOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\DeleteParagraphOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting  a paragraph without node path.
     */
    public function testDeleteParagraphWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphRequest(
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

    $this->words->deleteParagraph($request);
    }

    /*
     * Test for getting paragraph list format.
     */
    public function testGetParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestParagraphGetListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphGetListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphListFormatRequest(
            $remoteFileName,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getListFormat());
        Assert::assertEquals(1, $result->getListFormat()->getListId());
    }

    /*
     * Test for getting paragraph list format online.
     */
    public function testGetParagraphListFormatOnline()
    {
        $listFolder = "DocumentElements/ParagraphListFormat";

        $request = new Requests\GetParagraphListFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $listFolder . "/ParagraphGetListFormat.doc",
            0,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getParagraphListFormatOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph list format without node path.
     */
    public function testGetParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestParagraphGetListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphGetListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphListFormatRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getListFormat());
        Assert::assertEquals(1, $result->getListFormat()->getListId());
    }

    /*
     * Test for updating paragraph list format.
     */
    public function testUpdateParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestUpdateParagraphListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphUpdateListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
            "list_id" => 2,
        ));
        $request = new Requests\UpdateParagraphListFormatRequest(
            $remoteFileName,
            0,
            $requestListFormatDto,
            "",
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
        Assert::assertNotNull($result->getListFormat());
        Assert::assertEquals(2, $result->getListFormat()->getListId());
    }

    /*
     * Test for updating paragraph list format online.
     */
    public function testUpdateParagraphListFormatOnline()
    {
        $listFolder = "DocumentElements/ParagraphListFormat";

        $requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
            "list_id" => 2,
        ));
        $request = new Requests\UpdateParagraphListFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $listFolder . "/ParagraphUpdateListFormat.doc",
            $requestListFormatDto,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateParagraphListFormatOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for updating paragraph list format without node path.
     */
    public function testUpdateParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestUpdateParagraphListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphUpdateListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
            "list_id" => 2,
        ));
        $request = new Requests\UpdateParagraphListFormatRequest(
            $remoteFileName,
            0,
            $requestListFormatDto,
            NULL,
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
        Assert::assertNotNull($result->getListFormat());
        Assert::assertEquals(2, $result->getListFormat()->getListId());
    }

    /*
     * Test for deleting paragraph list format.
     */
    public function testDeleteParagraphListFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestDeleteParagraphListFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphDeleteListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphListFormatRequest(
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

        $result = $this->words->deleteParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting paragraph list format online.
     */
    public function testDeleteParagraphListFormatOnline()
    {
        $listFolder = "DocumentElements/ParagraphListFormat";

        $request = new Requests\DeleteParagraphListFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $listFolder . "/ParagraphDeleteListFormat.doc",
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphListFormatOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for deleting paragraph list format without node path.
     */
    public function testDeleteParagraphListFormatWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $listFolder = "DocumentElements/ParagraphListFormat";
        $remoteFileName = "TestDeleteParagraphListFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $listFolder . "/ParagraphDeleteListFormat.doc",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphListFormatRequest(
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

        $result = $this->words->deleteParagraphListFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph tab stops.
     */
    public function testGetParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestGetParagraphTabStops.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphTabStopsRequest(
            $remoteFileName,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(2, $result->getTabStops());
        Assert::assertEquals(72.0, $result->getTabStops()[0]->getPosition());
    }

    /*
     * Test for getting paragraph tab stops online.
     */
    public function testGetParagraphTabStopsOnline()
    {
        $tabStopFolder = "DocumentElements/Paragraphs";

        $request = new Requests\GetParagraphTabStopsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $tabStopFolder . "/ParagraphTabStops.docx",
            0,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getParagraphTabStopsOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting paragraph tab stops without node path.
     */
    public function testGetParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestGetParagraphTabStopsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetParagraphTabStopsRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(2, $result->getTabStops());
        Assert::assertEquals(72.0, $result->getTabStops()[0]->getPosition());
    }

    /*
     * Test for inserting paragraph tab stop.
     */
    public function testInsertParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestInsertOrUpdateParagraphTabStop.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
            "alignment" => "Left",
            "leader" => "None",
            "position" => 100.0,
        ));
        $request = new Requests\InsertOrUpdateParagraphTabStopRequest(
            $remoteFileName,
            0,
            $requestTabStopInsertDto,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertOrUpdateParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(3, $result->getTabStops());
        Assert::assertEquals(100.0, $result->getTabStops()[1]->getPosition());


    }

    /*
     * Test for inserting paragraph tab stop online.
     */
    public function testInsertParagraphTabStopsOnline()
    {
        $tabStopFolder = "DocumentElements/Paragraphs";

        $requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
            "alignment" => "Left",
            "leader" => "None",
            "position" => 72,
        ));
        $request = new Requests\InsertOrUpdateParagraphTabStopOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $tabStopFolder . "/ParagraphTabStops.docx",
            $requestTabStopInsertDto,
            0,
            "",
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertOrUpdateParagraphTabStopOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for inserting paragraph tab stop without node path.
     */
    public function testInsertParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestInsertOrUpdateParagraphTabStopWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
            "alignment" => "Left",
            "leader" => "None",
            "position" => 100.0,
        ));
        $request = new Requests\InsertOrUpdateParagraphTabStopRequest(
            $remoteFileName,
            0,
            $requestTabStopInsertDto,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertOrUpdateParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(3, $result->getTabStops());
        Assert::assertEquals(100.0, $result->getTabStops()[1]->getPosition());


    }

    /*
     * Test for deleting all paragraph tab stops.
     */
    public function testDeleteAllParagraphTabStops()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteAllParagraphTabStops.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteAllParagraphTabStopsRequest(
            $remoteFileName,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteAllParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(0, $result->getTabStops());
    }

    /*
     * Test for deleting all paragraph tab stops online.
     */
    public function testDeleteAllParagraphTabStopsOnline()
    {
        $tabStopFolder = "DocumentElements/Paragraphs";

        $request = new Requests\DeleteAllParagraphTabStopsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $tabStopFolder . "/ParagraphTabStops.docx",
            0,
            "",
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteAllParagraphTabStopsOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for deleting all paragraph tab stops without node path.
     */
    public function testDeleteAllParagraphTabStopsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteAllParagraphTabStopsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteAllParagraphTabStopsRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteAllParagraphTabStops($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(0, $result->getTabStops());
    }

    /*
     * Test for deleting a tab stops.
     */
    public function testDeleteParagraphTabStop()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteParagraphTabStop.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphTabStopRequest(
            $remoteFileName,
            72.0,
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(1, $result->getTabStops());
    }

    /*
     * Test for deleting a tab stops online.
     */
    public function testDeleteParagraphTabStopOnline()
    {
        $tabStopFolder = "DocumentElements/Paragraphs";

        $request = new Requests\DeleteParagraphTabStopOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $tabStopFolder . "/ParagraphTabStops.docx",
            72.0,
            0,
            "",
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphTabStopOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for deleting a tab stops without node path.
     */
    public function testDeleteParagraphTabStopWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Paragraphs";
        $tabStopFolder = "DocumentElements/Paragraphs";
        $remoteFileName = "TestDeleteParagraphTabStopWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $tabStopFolder . "/ParagraphTabStops.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteParagraphTabStopRequest(
            $remoteFileName,
            72.0,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteParagraphTabStop($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTabStops());
        Assert::assertCount(1, $result->getTabStops());
    }
}