<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteTemplateTests.php">
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
 * Example of how to perform template execution.
 */
class ExecuteTemplateTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentActions/MailMerge";
    private static $mailMergeFolder = "DocumentActions/MailMerge";

    /*
     * Test for posting execute template.
     */
    public function testExecuteTemplate()
    {
        $localDocumentFile = "TestExecuteTemplate.doc";
        $remoteFileName = "TestExecuteTemplate.docx";
        $localDataFile = file_get_contents(realpath(__DIR__ . '/../../../../..') . $mailMergeFolder . "/TestExecuteTemplateData.txt");

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $mailMergeFolder . "/" . $localDocumentFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\ExecuteMailMergeRequest(
            $remoteFileName,
            $localDataFile,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName
        );

        $result = $this->words->executeMailMerge($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for execute template online.
     */
    public function testExecuteTemplateOnline()
    {
        $localDocumentFile = "SampleMailMergeTemplate.docx";
        $localDataFile = "SampleExecuteTemplateData.txt";

        $request = new Requests\ExecuteMailMergeOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . $mailMergeFolder . "/" . $localDocumentFile,
            realpath(__DIR__ . '/../../../../..') . $mailMergeFolder . "/" . $localDataFile,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->executeMailMergeOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}