<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeTests.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{GetRangeTextOnlineRequest, GetRangeTextRequest, RemoveRangeOnlineRequest, RemoveRangeRequest, ReplaceWithTextOnlineRequest, ReplaceWithTextRequest, SaveAsRangeOnlineRequest, SaveAsRangeRequest, TranslateNodeIdOnlineRequest, TranslateNodeIdRequest};
use Aspose\Words\Model\{RangeDocument, ReplaceRange};
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetRangeTextRequest(
            $remoteFileName,
            "id0.0.0",
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRangeText($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertEquals("This is HEADER ", $result->getText());
    }

    /*
     * Test for getting the text from range online.
     */
    public function testGetRangeTextOnline()
    {
        $localFile = "DocumentElements/Range/RangeGet.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetRangeTextOnlineRequest(
            $requestDocument,
            "id0.0.0",
            "id0.0.1",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getRangeTextOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new RemoveRangeRequest(
            $remoteFileName,
            "id0.0.0",
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->removeRange($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for removing the text for range online.
     */
    public function testRemoveRangeOnline()
    {
        $localFile = "DocumentElements/Range/RangeGet.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new RemoveRangeOnlineRequest(
            $requestDocument,
            "id0.0.0",
            "id0.0.1",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->removeRangeOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDocumentParameters = new RangeDocument(array(
            "document_name" => $remoteDataFolder . "/NewDoc.docx",
        ));
        $request = new SaveAsRangeRequest(
            $remoteFileName,
            "id0.0.0",
            $requestDocumentParameters,
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAsRange($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("NewDoc.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for saving a range as a new document online.
     */
    public function testSaveAsRangeOnline()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDocumentParameters = new RangeDocument(array(
            "document_name" => $remoteDataFolder . "/NewDoc.docx",
        ));
        $request = new SaveAsRangeOnlineRequest(
            $requestDocument,
            "id0.0.0",
            $requestDocumentParameters,
            "id0.0.1",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->saveAsRangeOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRangeText = new ReplaceRange(array(
            "text" => "Replaced header",
        ));
        $request = new ReplaceWithTextRequest(
            $remoteFileName,
            "id0.0.0",
            $requestRangeText,
            "id0.0.1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->replaceWithText($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestReplaceWithText.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for replacing text in range online.
     */
    public function testReplaceWithTextOnline()
    {
        $localFile = "DocumentElements/Range/RangeGet.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestRangeText = new ReplaceRange(array(
            "text" => "Replaced header",
        ));
        $request = new ReplaceWithTextOnlineRequest(
            $requestDocument,
            "id0.0.0",
            $requestRangeText,
            "id0.0.1",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->replaceWithTextOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test to translate node id to node path.
     */
    public function testTranslateNodeId()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Range";
        $localFile = "DocumentElements/Range/RangeGet.doc";
        $remoteFileName = "TestTranslateNodeId.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new TranslateNodeIdRequest(
            $remoteFileName,
            "id0.0.0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->translateNodeId($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertEquals("sections/0/body/paragraphs/0", $result->getPath());
    }

    /*
     * Test to translate node id to node path online.
     */
    public function testTranslateNodeIdOnline()
    {
        $localFile = "DocumentElements/Range/RangeGet.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new TranslateNodeIdOnlineRequest(
            $requestDocument,
            "id0.0.0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->translateNodeIdOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }
}