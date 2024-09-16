<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteTemplateTests.php">
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
use Aspose\Words\Model\Requests\{ExecuteMailMergeOnlineRequest, ExecuteMailMergeRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to perform template execution.
 */
class ExecuteTemplateTests extends BaseTestContext
{
    /*
     * Test for posting execute template.
     */
    public function testExecuteTemplate()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/MailMerge";
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "TestExecuteTemplate.doc";
        $remoteFileName = "TestExecuteTemplate.docx";
        $localDataFile = file_get_contents(realpath(__DIR__ . '/../../..') . "/TestData/" . $mailMergeFolder . "/TestExecuteTemplateData.txt");

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $mailMergeFolder . "/" . $localDocumentFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new ExecuteMailMergeRequest(
            $remoteFileName,
            $localDataFile,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName
        );

        $result = $this->words->executeMailMerge($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestExecuteTemplate.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for execute template online.
     */
    public function testExecuteTemplateOnline()
    {
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "SampleMailMergeTemplate.docx";
        $localDataFile = "SampleExecuteTemplateData.txt";

        $requestTemplate = realpath(__DIR__ . '/../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDocumentFile;
        $requestData = realpath(__DIR__ . '/../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDataFile;
        $request = new ExecuteMailMergeOnlineRequest(
            $requestTemplate,
            $requestData,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->executeMailMergeOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}