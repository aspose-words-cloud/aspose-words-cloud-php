<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeTests.php">
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
 * Example of how to work with ranges.
 */
class RangeTests extends BaseTestContext
{
    /*
     * Test for getting the text from range.
     */
    public function testGetRangeText()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";
        $remoteFileName = "TestGetRangeText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetRangeTextRequest(
            $remoteFileName,
            "id0.0.0",
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRangeText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertEquals("This is HEADER ", $result->getText());
    }

    /*
     * Test for removing the text for range.
     */
    public function testRemoveRange()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";
        $remoteFileName = "TestRemoveRange.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RemoveRangeRequest(
            $remoteFileName,
            "id0.0.0",
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->removeRange($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestRemoveRange.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for saving a range as a new document.
     */
    public function testSaveAsRange()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";
        $remoteFileName = "TestSaveAsRange.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDocumentParameters = new \Aspose\Words\Model\RangeDocument(array(
            "document_name" => $remoteDataFolder . "/NewDoc.docx",
        ));
        $request = new Requests\SaveAsRangeRequest(
            $remoteFileName,
            "id0.0.0",
            $requestDocumentParameters,
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAsRange($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("NewDoc.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for replacing text in range.
     */
    public function testReplaceWithText()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";
        $remoteFileName = "TestReplaceWithText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRangeText = new \Aspose\Words\Model\ReplaceRange(array(
            "text" => "Replaced header",
        ));
        $request = new Requests\ReplaceWithTextRequest(
            $remoteFileName,
            "id0.0.0",
            $requestRangeText,
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->replaceWithText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestReplaceWithText.docx", $result->getDocument()->getFileName());
    }
}