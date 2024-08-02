<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitDocumentToFormatTests.php">
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
use Aspose\Words\Model\Requests\{SplitDocumentOnlineRequest, SplitDocumentRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to split document and return result with specified format and page range.
 */
class SplitDocumentToFormatTests extends BaseTestContext
{
    /*
     * Test for document splitting.
     */
    public function testSplitDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/SplitDocument";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestSplitDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new SplitDocumentRequest(
            $remoteFileName,
            "text",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestSplitDocument.text",
            1,
            2,
            NULL,
            NULL
        );

        $result = $this->words->splitDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSplitResult());
        Assert::assertNotNull($result->getSplitResult()->getPages());
        Assert::assertCount(2, $result->getSplitResult()->getPages());
    }

    /*
     * Test for document splitting online.
     */
    public function testSplitDocumentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new SplitDocumentOnlineRequest(
            $requestDocument,
            "text",
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestSplitDocument.text",
            1,
            2,
            NULL,
            NULL
        );

        $result = $this->words->splitDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}