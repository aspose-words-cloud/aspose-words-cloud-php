<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteTemplateWithFieldOptionsTests.php">
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
use Aspose\Words\Model\{FieldOptions, UserInformation};
use PHPUnit\Framework\Assert;

/*
 * Example of how to perform template execution.
 */
class ExecuteTemplateWithFieldOptionsTests extends BaseTestContext
{
    /*
     * Test for posting execute template.
     */
    public function testExecuteTemplateWithFieldOptions()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/MailMerge";
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "TestMailMergeWithOptions.docx";
        $remoteFileName = "TestMailMergeWithOptions.docx";
        $localDataFile = file_get_contents(realpath(__DIR__ . '/../../..') . "/TestData/" . $mailMergeFolder . "/TestMailMergeData.xml");

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $mailMergeFolder . "/" . $localDocumentFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestOptionsCurrentUser = new UserInformation(array(
            "name" => "SdkTestUser",
        ));
        $requestOptions = new FieldOptions(array(
            "current_user" => $requestOptionsCurrentUser,
        ));
        $request = new ExecuteMailMergeRequest(
            $remoteFileName,
            $localDataFile,
            $requestOptions,
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
        Assert::assertEquals("TestMailMergeWithOptions.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for execute template online.
     */
    public function testExecuteTemplateOnlineWithFieldOptions()
    {
        $mailMergeFolder = "DocumentActions/MailMerge";
        $localDocumentFile = "TestMailMergeWithOptions.docx";
        $localDataFile = "TestMailMergeData.xml";

        $requestTemplate = realpath(__DIR__ . '/../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDocumentFile;
        $requestData = realpath(__DIR__ . '/../../..') . '/TestData/' . $mailMergeFolder . "/" . $localDataFile;
        $requestOptionsCurrentUser = new UserInformation(array(
            "name" => "SdkTestUser",
        ));
        $requestOptions = new FieldOptions(array(
            "current_user" => $requestOptionsCurrentUser,
        ));
        $request = new ExecuteMailMergeOnlineRequest(
            $requestTemplate,
            $requestData,
            $requestOptions,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->executeMailMergeOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}