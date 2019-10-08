<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ExecuteMailMergeTests.php">
*   Copyright (c) 2019 Aspose.Words for Cloud
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
* --------------------------------------------------------------------------------------------------------------------
*/
namespace Aspose\Tests;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

class ExecuteMailMergeTests extends BaseTestContext
{
    /**
     * Test case for executeMailMerge
     *
     * Execute document mail merge operation..
     *
     */
    public function testExecuteMailMerge()
    {
        $localName = "SampleMailMergeTemplate.docx";
        $remoteName = "TestExecuteMailMerge.docx";
        $subfolder = "DocumentActions/MailMerge";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $data = file_get_contents(realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/MailMerge/' . "SampleMailMergeTemplateData.txt");

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/MailMerge/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ExecuteMailMergeRequest($remoteName, $data, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, false, $destName);

        $result = $this->words->executeMailMerge($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for executeMailMergeOnline
     *
     * Execute document mail merge online..
     *
     */
    public function testExecuteMailMergeOnline()
    {
        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/MailMerge/' . "SampleMailMergeTemplate.docx";
        $data = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/MailMerge/' . "SampleMailMergeTemplateData.txt";
        $request = new Requests\ExecuteMailMergeOnlineRequest($file, $data);

        $result = $this->words->executeMailMergeOnline($request);
        Assert::assertNotNull($result, "Error occurred while executing mail merge");
    }
}