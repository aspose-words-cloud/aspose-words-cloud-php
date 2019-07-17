<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ParagraphTests.php">
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
use Aspose\Words\Model\ParagraphInsert;
use Aspose\Words\Model\ParagraphFormat;
use Aspose\Words\Model\Font;
use PHPUnit\Framework\Assert;

class ParagraphTests extends \BaseTest\BaseTestContext
{
    /**
     * Test case for deleteParagraph
     *
     * Remove paragraph from section..
     *
     */
    public function testDeleteParagraph()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestDeleteParagraph.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteParagraphRequest($remoteName, $index, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentParagraph
     *
     * This resource represents one of the paragraphs contained in the document..
     *
     */
    public function testGetDocumentParagraph()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentParagraph.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetParagraphRequest($remoteName, $index, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentParagraphRun
     *
     * This resource represents run of text contained in the document..
     *
     */
    public function testGetDocumentParagraphRun()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentParagraphRun.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetRunRequest($remoteName, "paragraphs/0", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentParagraphRunFont
     *
     * This resource represents font of run..
     *
     */
    public function testGetDocumentParagraphRunFont()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentParagraphRunFont.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetRunFontRequest($remoteName, "paragraphs/0", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getRunFont($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentParagraphRuns
     *
     * This resource represents collection of runs in the paragraph..
     *
     */
    public function testGetDocumentParagraphRuns()
    {
        $localName = "GetField.docx";
        $remoteName = "TestGetDocumentParagraphRuns.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetRunsRequest($remoteName, "sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getRuns($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentParagraphs
     *
     * Return a list of paragraphs that are contained in the document..
     *
     */
    public function testGetDocumentParagraphs()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentParagraphs.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetParagraphsRequest($remoteName, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getParagraphs($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postDocumentParagraphRunFont
     *
     * Updates font properties, returns updated font data..
     *
     */
    public function testPostDocumentParagraphRunFont()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostDocumentParagraphRunFont.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $destName = self::$baseTestOut . $remoteName;
        $fontDto = new Font(array("bold" => true));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateRunFontRequest($remoteName, $fontDto, "paragraphs/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->updateRunFont($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for putParagraph
     *
     * Adds paragraph to document, returns added paragraph's data..
     *
     */
    public function testPutParagraph()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutParagraph.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $paragraph = new ParagraphInsert(array("text" => "This is a new paragraph for your document"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertParagraphRequest($remoteName, $paragraph, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for renderParagraph
     *
     * Renders paragraph to specified format..
     *
     */
    public function testRenderParagraph()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestRenderParagraph.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RenderParagraphRequest($remoteName, $format, $index, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderParagraph($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getParagraphFormat
     *
     * Get format of paragraph.
     *
     */
    public function testGetDocumentParagraphFormat()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "testGetDocumentParagraphFormat.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetParagraphFormatRequest($remoteName, $index, "", self::$baseTestPath . $subfolder,
                NULL, NULL, NULL);

        $result = $this->words->getParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateParagraphFormat
     *
     * Update format of paragraph.
     *
     */
    public function testPostDocumentParagraphFormat()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "testPostDocumentParagraphFormat.docx";
        $subfolder = "DocumentElements/Paragraph";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $body = new ParagraphFormat(array(
            "alignment" => "Right",           
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateParagraphFormatRequest($remoteName, $body, "", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->updateParagraphFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}