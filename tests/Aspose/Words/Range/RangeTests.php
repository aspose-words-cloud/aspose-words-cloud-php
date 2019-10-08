<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="RangeTests.php">
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
use Aspose\Words\Model\ReplaceRange;
use Aspose\Words\Model\RangeDocument;
use PHPUnit\Framework\Assert;

class RangeTests extends BaseTestContext
{
    /**
     *
     * Test for getting the text from range.
     *
     */
    public function testGetRangeText()
    {
        $rangeStart = 'id0.0.0';
        $rangeEnd = 'id0.0.1';
        $expectedText = 'This is HEADER ';

        $localName = "RangeGet.doc";
        $remoteName = "TestGetRangeText.doc";
        $subfolder = "DocumentElements/Range";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Range/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetRangeTextRequest($remoteName, $rangeStart, $rangeEnd, self::$baseTestPath .$subfolder);

        $result = $this->words->getRangeText($request);
        Assert::assertEquals($expectedText, json_decode($result, true)['Text']);
    }

    /**
     *
     * Test for removing the text for range.
     *
     */
    public function testRemoveRange()
    {
        $rangeStart = 'id0.0.0';
        $rangeEnd = 'id0.0.1';

        $localName = "RangeGet.doc";
        $remoteName = "TestRemoveRange.doc";
        $subfolder = "DocumentElements/Range";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Range/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RemoveRangeRequest($remoteName, $rangeStart, $rangeEnd, self::$baseTestPath .$subfolder);

        $result = $this->words->removeRange($request);
        Assert::assertNotNull($result);
    }

    /**
     * 
     * Test for saving a range as a new document.
     *
     */
    public function testSaveAsRange()
    {
        $rangeStart = 'id0.0.0';
        $rangeEnd = 'id0.0.1';
        $newDocName = self::$baseTestPath . '/NewDoc.docx';
        $rangeDoc = new RangeDocument(["document_name" => $newDocName]);

        $localName = "RangeGet.doc";
        $remoteName = "TestSaveAsRange.doc";
        $subfolder = "DocumentElements/Range";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Range/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\SaveAsRangeRequest($remoteName, $rangeStart, $rangeDoc, $rangeEnd, self::$baseTestPath .$subfolder);

        $result = $this->words->saveAsRange($request);
        Assert::assertNotNull($result);
    }

    /**
     *
     * Test for replacing text in range
     *
     */
    public function testReplaceWithText()
    {
        $rangeStart = 'id0.0.0';
        $rangeEnd = 'id0.0.1';
        $newText = 'Replace header';
        $replacement  = new ReplaceRange(["text" => $newText]);

        $localName = "RangeGet.doc";
        $remoteName = "TestGetRangeText.doc";
        $subfolder = "DocumentElements/Range";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Range/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ReplaceWithTextRequest($remoteName, $rangeStart, $replacement, $rangeEnd, self::$baseTestPath .$subfolder);

        $result = $this->words->replaceWithText($request);
        Assert::assertNotNull($result);
    }
}