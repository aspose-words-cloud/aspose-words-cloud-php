<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HyperlinkTests.php">
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
 * Example of how to work with hyperlinks.
 */
class HyperlinkTests extends BaseTestContext
{
    /*
     * Test for getting hyperlink by specified index.
     */
    public function testGetDocumentHyperlinkByIndex()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Hyperlink";
        $localFile = "Common/test_doc.docx";
        $remoteFileName = "TestGetDocumentHyperlinkByIndex.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentHyperlinkByIndexRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentHyperlinkByIndex($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getHyperlink());
        Assert::assertEquals("Aspose", $result->getHyperlink()->getDisplayText());
    }

    /*
     * Test for getting hyperlink by specified index online.
     */
    public function testGetDocumentHyperlinkByIndexOnline()
    {
        $localFile = "Common/test_doc.docx";

        $request = new Requests\GetDocumentHyperlinkByIndexOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentHyperlinkByIndexOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting hyperlinks.
     */
    public function testGetDocumentHyperlinks()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Hyperlink";
        $localFile = "Common/test_doc.docx";
        $remoteFileName = "TestGetDocumentHyperlinks.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentHyperlinksRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentHyperlinks($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getHyperlinks());
        Assert::assertNotNull($result->getHyperlinks()->getHyperlinkList());
        Assert::assertCount(2, $result->getHyperlinks()->getHyperlinkList());
        Assert::assertEquals("Aspose", $result->getHyperlinks()->getHyperlinkList()[0]->getDisplayText());
    }

    /*
     * Test for getting hyperlinks online.
     */
    public function testGetDocumentHyperlinksOnline()
    {
        $localFile = "Common/test_doc.docx";

        $request = new Requests\GetDocumentHyperlinksOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentHyperlinksOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}