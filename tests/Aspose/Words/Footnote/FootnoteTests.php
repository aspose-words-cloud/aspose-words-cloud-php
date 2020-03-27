<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FootnoteTests.php">
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
use Aspose\Words\Model\FootnoteInsert;
use Aspose\Words\Model\FootnoteUpdate;
use PHPUnit\Framework\Assert;

class FootnoteTests extends BaseTestContext
{
    /**
     * Test case for getFootnote
     *
     * Read footnote by index..
     *
     */
    public function testGetFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFootnoteRequest($remoteName,"", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFootnoteWithoutNodePath
     *
     * Read footnote by index..
     *
     */
    public function testGetFootnoteWithoutNodePath()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnoteWithoutNodePath.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFootnoteWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFootnotes
     *
     * Get footnotes from document..
     *
     */
    public function testGetFootnotes()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnotes.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFootnotesRequest($remoteName, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFootnotes($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFootnotesWithoutNodePath
     *
     * Get footnotes from document..
     *
     */
    public function testGetFootnotesWithoutNodePath()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestGetFootnotesWithoutNodePath.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFootnotesWithoutNodePathRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFootnotesWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteFootnote
     *
     * Removes footnote from document..
     *
     */
    public function testDeleteFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestDeleteFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFootnoteRequest($remoteName, "", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteFootnoteWithoutNodePath
     *
     * Removes footnote from document..
     *
     */
    public function testDeleteFootnoteWithoutNodePath()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestDeleteFootnoteWithoutNodePath.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFootnoteWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateFootnote
     *
     * Updates footnote's properties, returns updated run's data..
     *
     */
    public function testUpdateFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestUpdateFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $footNote = new FootnoteUpdate(array("text" => "new text is here"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateFootnoteRequest($remoteName, $footNote, "", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->updateFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateFootnoteWithoutNodePath
     *
     * Updates footnote's properties, returns updated run's data..
     *
     */
    public function testUpdateFootnoteWithoutNodePath()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestUpdateFootnoteWithoutNodePath.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $footNote = new FootnoteUpdate(array("text" => "new text is here"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateFootnoteWithoutNodePathRequest($remoteName, $footNote, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->updateFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertFootnote
     *
     * Adds footnote to document, returns added footnote's data..
     *
     */
    public function testInsertFootnote()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestInsertFootnote.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $footnote = new FootnoteInsert(array("footnote_type" => FootnoteInsert::FOOTNOTE_TYPE_ENDNOTE, "text" => "test endnote"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertFootnoteRequest($remoteName, $footnote, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertFootnote($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertFootnoteWithoutNodePath
     *
     * Adds footnote to document, returns added footnote's data..
     *
     */
    public function testInsertFootnoteWithoutNodePath()
    {
        $localName = "Footnote.doc";
        $remoteName = "TestInsertFootnoteWithoutNodePath.docx";
        $subfolder = "DocumentElements/Footnote";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $footnote = new FootnoteInsert(array("footnote_type" => FootnoteInsert::FOOTNOTE_TYPE_ENDNOTE, "text" => "test endnote"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Footnotes/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertFootnoteWithoutNodePathRequest($remoteName, $footnote, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertFootnoteWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}