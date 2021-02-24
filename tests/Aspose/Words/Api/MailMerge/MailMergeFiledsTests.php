<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MailMergeFiledsTests.php">
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
 * Example of how to work with merge fields.
 */
class MailMergeFiledsTests extends BaseTestContext
{
    /*
     * Test for putting new fields.
     */
    public function testGetDocumentFieldNamesOnline()
    {
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "SampleExecuteTemplate.docx";

        $request = new Requests\GetDocumentFieldNamesOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDocumentFile,
            NULL,
            NULL,
            true
        );

        $result = $this->words->getDocumentFieldNamesOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFieldNames());
        Assert::assertNotNull($result->getFieldNames()->getNames());
        Assert::assertCount(15, $result->getFieldNames()->getNames());
        Assert::assertEquals("TableStart:Order", $result->getFieldNames()->getNames()[0]);
    }

    /*
     * Test for getting mailmerge fields.
     */
    public function testGetDocumentFieldNames()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/MailMerge";
        $remoteFileName = "TestGetDocumentFieldNames.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/test_multi_pages.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentFieldNamesRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentFieldNames($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFieldNames());
        Assert::assertNotNull($result->getFieldNames()->getNames());
        Assert::assertCount(0, $result->getFieldNames()->getNames());
    }
}