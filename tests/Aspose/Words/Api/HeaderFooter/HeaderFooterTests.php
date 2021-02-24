<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HeaderFooterTests.php">
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
 * Example of how to work with headers and footers.
 */
class HeaderFooterTests extends BaseTestContext
{
    /*
     * Test for getting headers and footers.
     */
    public function testGetHeaderFooters()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestGetHeadersFooters.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetHeaderFootersRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFooters($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getHeaderFooters());
        Assert::assertNotNull($result->getHeaderFooters()->getList());
        Assert::assertCount(6, $result->getHeaderFooters()->getList());
    }

    /*
     * Test for getting headers and footers online.
     */
    public function testGetHeaderFootersOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\GetHeaderFootersOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "",
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFootersOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting headerfooter.
     */
    public function testGetHeaderFooter()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestGetHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetHeaderFooterRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFooter($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getHeaderFooter());
        Assert::assertNotNull($result->getHeaderFooter()->getChildNodes());
        Assert::assertCount(1, $result->getHeaderFooter()->getChildNodes());
        Assert::assertEquals("0.0.0", $result->getHeaderFooter()->getChildNodes()[0]->getNodeId());
    }

    /*
     * Test for getting headerfooter online.
     */
    public function testGetHeaderFooterOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\GetHeaderFooterOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFooterOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting headerfooter of section.
     */
    public function testGetHeaderFooterOfSection()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestGetHeaderFooterOfSection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetHeaderFooterOfSectionRequest(
            $remoteFileName,
            0,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFooterOfSection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getHeaderFooter());
        Assert::assertNotNull($result->getHeaderFooter()->getChildNodes());
        Assert::assertCount(1, $result->getHeaderFooter()->getChildNodes());
        Assert::assertEquals("0.0.0", $result->getHeaderFooter()->getChildNodes()[0]->getNodeId());
    }

    /*
     * Test for getting headerfooter of section online.
     */
    public function testGetHeaderFooterOfSectionOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\GetHeaderFooterOfSectionOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            0,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getHeaderFooterOfSectionOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting headerfooter.
     */
    public function testDeleteHeaderFooter()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestDeleteHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteHeaderFooterRequest(
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

    $this->words->deleteHeaderFooter($request);
    }

    /*
     * Test for deleting headerfooter online.
     */
    public function testDeleteHeaderFooterOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\DeleteHeaderFooterOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "",
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteHeaderFooterOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting headerfooters.
     */
    public function testDeleteHeadersFooters()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestDeleteHeadersFooters.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteHeadersFootersRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteHeadersFooters($request);
    }

    /*
     * Test for deleting headerfooters online.
     */
    public function testDeleteHeadersFootersOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\DeleteHeadersFootersOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteHeadersFootersOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for adding headerfooters.
     */
    public function testInsertHeaderFooter()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/HeaderFooters";
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";
        $remoteFileName = "TestInsertHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\InsertHeaderFooterRequest(
            $remoteFileName,
            "",
            "FooterEven",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertHeaderFooter($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding headerfooters online.
     */
    public function testInsertHeaderFooterOnline()
    {
        $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

        $request = new Requests\InsertHeaderFooterOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "",
            "FooterEven",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertHeaderFooterOnline($request);
        Assert::isTrue($result !== NULL);
        Assert::assertNotNull($result->getModel()->getHeaderFooter());
        Assert::assertNotNull($result->getModel()->getHeaderFooter()->getChildNodes());
        Assert::assertCount(1, $result->getModel()->getHeaderFooter()->getChildNodes());
        Assert::assertEquals("0.2.0", $result->getModel()->getHeaderFooter()->getChildNodes()[0]->getNodeId());
    }
}