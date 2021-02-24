<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteMailMergeTests.php">
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
 * Example of how to perform mail merge.
 */
class ExecuteMailMergeTests extends BaseTestContext
{
    /*
     * Test for executing mail merge online.
     */
    public function testExecuteMailMergeOnline()
    {
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "SampleExecuteTemplate.docx";
        $localDataFile = "SampleExecuteTemplateData.txt";

        $request = new Requests\ExecuteMailMergeOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDocumentFile,
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDataFile,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->executeMailMergeOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for executing mail merge.
     */
    public function testExecuteMailMerge()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/MailMerge";
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "SampleExecuteTemplate.docx";
        $remoteFileName = "TestExecuteMailMerge.docx";
        $localDataFile = file_get_contents(realpath(__DIR__ . '/../../../../..') . "/TestData/" . $mailMergeFolder . "/SampleMailMergeTemplateData.txt");

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $mailMergeFolder . "/" . $localDocumentFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\ExecuteMailMergeRequest(
            $remoteFileName,
            $localDataFile,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            false,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName
        );

        $result = $this->words->executeMailMerge($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestExecuteMailMerge.docx", $result->getDocument()->getFileName());
    }
}