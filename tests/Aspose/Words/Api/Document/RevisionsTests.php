<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RevisionsTests.php">
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
 * Example of how to accept all revisions in document.
 */
class RevisionsTests extends BaseTestContext
{
    /*
     * Test for accepting revisions in document.
     */
    public function testAcceptAllRevisions()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Revisions";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestAcceptAllRevisions.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\AcceptAllRevisionsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName
        );

        $result = $this->words->acceptAllRevisions($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getResult());
        Assert::assertNotNull($result->getResult()->getDest());
    }

    /*
     * Test for accepting revisions in document online.
     */
    public function testAcceptAllRevisionsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\AcceptAllRevisionsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->acceptAllRevisionsOnline($request);
        Assert::isTrue($result !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertNotNull($result->getModel());
        Assert::assertNotNull($result->getModel()->getResult());
        Assert::assertNotNull($result->getModel()->getResult()->getDest());
    }

    /*
     * Test for rejecting revisions in document.
     */
    public function testRejectAllRevisions()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Revisions";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestRejectAllRevisions.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RejectAllRevisionsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName
        );

        $result = $this->words->rejectAllRevisions($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getResult());
        Assert::assertNotNull($result->getResult()->getDest());
    }

    /*
     * Test for rejecting revisions in document online.
     */
    public function testRejectAllRevisionsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\RejectAllRevisionsOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->rejectAllRevisionsOnline($request);
        Assert::isTrue($result !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertNotNull($result->getModel());
        Assert::assertNotNull($result->getModel()->getResult());
        Assert::assertNotNull($result->getModel()->getResult()->getDest());
    }
}