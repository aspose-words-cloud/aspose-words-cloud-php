<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HeaderFooterTests.php">
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
 * Example of how to work with headers and footers.
 */
class HeaderFooterTests extends BaseTestContext
{
    private static $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/HeaderFooters";
    private static $localFile = "DocumentElements/HeaderFooters/HeadersFooters.doc";

    /*
     * Test for getting headers and footers.
     */
    public function testGetHeaderFooters()
    {
        $remoteFileName = "TestGetHeadersFooters.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for getting headerfooter.
     */
    public function testGetHeaderFooter()
    {
        $remoteFileName = "TestGetHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for getting headerfooter of section.
     */
    public function testGetHeaderFooterOfSection()
    {
        $remoteFileName = "TestGetHeaderFooterOfSection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for deleting headerfooter.
     */
    public function testDeleteHeaderFooter()
    {
        $remoteFileName = "TestDeleteHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
     * Test for deleting headerfooters.
     */
    public function testDeleteHeadersFooters()
    {
        $remoteFileName = "TestDeleteHeadersFooters.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
     * Test for adding headerfooters.
     */
    public function testInsertHeaderFooter()
    {
        $remoteFileName = "TestInsertHeaderFooter.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\InsertHeaderFooterRequest(
            $remoteFileName,
            "FooterEven",
            "",
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
}