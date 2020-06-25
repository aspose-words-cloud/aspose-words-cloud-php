<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentWithFormatTests.php">
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
 * Example of how to get document with different format.
 */
class DocumentWithFormatTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentActions/DocumentWithFormat";
    private static $localFile = "Common/test_multi_pages.docx";

    /*
     * Test for getting document with specified format.
     */
    public function testGetDocumentWithFormat()
    {
        $remoteFileName = "TestGetDocumentWithFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentWithFormatRequest(
            $remoteFileName,
            "text",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentWithFormat($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting document with specified format.
     */
    public function testGetDocumentWithFormatAndOutPath()
    {
        $remoteFileName = "TestGetDocumentWithFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentWithFormatRequest(
            $remoteFileName,
            "text",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/TestGetDocumentWithFormatAndOutPath.text",
            NULL
        );

        $result = $this->words->getDocumentWithFormat($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}