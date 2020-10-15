<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchTests.php">
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
use PHPUnit\Framework\Assert;
class BatchTests extends BaseTestContext
{
    /**
     * Tests of batch requests
     */
    public function testBatch()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentParagraphByIndexBatch.docx";
        $subfolder = "DocumentElements/Paragraphs";
        $fullName = self::$baseRemoteFolderPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../..') . '/TestData/Common/' . $localName;
        $request0 = new Requests\UploadFileRequest($file, $fullName);

        $request1 = new Requests\GetParagraphsRequest($name=$remoteName, $nodePath="sections/0", $folder=self::$baseRemoteFolderPath . $subfolder);

        $request2 = new Requests\GetParagraphRequest($name=$remoteName, $index=0, $nodePath="sections/0", $folder=self::$baseRemoteFolderPath . $subfolder);

        $request3Body = new \Aspose\Words\Model\ParagraphInsert(array(
            "text" => "This is a new paragraph for your document",
        ));

        $request3 = new Requests\InsertParagraphRequest($name=$remoteName, $paragraph=$request3Body, $nodePath="sections/0", $folder=self::$baseRemoteFolderPath . $subfolder);

        $request4 = new Requests\DeleteParagraphRequest($name=$remoteName, $index=0, $nodePath="sections/0", $folder=self::$baseRemoteFolderPath . $subfolder);

        $reportingFolder = "DocumentActions/Reporting";
        $localDocumentFile = "ReportTemplate.docx";
        $localDataFile = file_get_contents(realpath(__DIR__ . '/../../..') . "/TestData/" . $reportingFolder . "/ReportData.json");

        $requestReportEngineSettings = new \Aspose\Words\Model\ReportEngineSettings(array(
            "data_source_type" => "Json",
            "data_source_name" => "persons",
        ));
        $request5 = new Requests\BuildReportOnlineRequest(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $reportingFolder . "/" . $localDocumentFile,
            $localDataFile,
            $requestReportEngineSettings,
            NULL
        );

        $result = $this->words->batch(array($request0, $request1, $request2, $request3, $request4, $request5));
        Assert::assertCount(6, $result);
        Assert::assertEquals(true, $result[0] instanceof \Aspose\Words\Model\FilesUploadResult);
        Assert::assertEquals(true, $result[1] instanceof \Aspose\Words\Model\ParagraphLinkCollectionResponse);
        Assert::assertEquals(true, $result[2] instanceof \Aspose\Words\Model\ParagraphResponse);
        Assert::assertEquals(true, $result[3] instanceof \Aspose\Words\Model\ParagraphResponse);
        Assert::assertEquals(null, $result[4]);
        Assert::assertEquals(true, $result[5] instanceof \SplFileObject);
    }
}
