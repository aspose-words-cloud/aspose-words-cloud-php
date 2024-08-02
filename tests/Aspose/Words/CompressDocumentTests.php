<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompressDocumentTests.php">
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
use Aspose\Words\Model\Requests\{CompressDocumentOnlineRequest, CompressDocumentRequest};
use Aspose\Words\Model\{CompressOptions};
use PHPUnit\Framework\Assert;

/*
 * Example of how to compress document for reduce document size.
 */
class CompressDocumentTests extends BaseTestContext
{
    /*
     * Test for compression document.
     */
    public function testCompressDocument()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/CompressDocument";
        $localFolder = "DocumentActions/CompressDocument";
        $localName = "TestCompress.docx";
        $remoteName = "TestCompress.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $localName,
            $remoteFolder . "/" . $remoteName
        );

        $requestCompressOptions = new CompressOptions(array(
        ));
        $request = new CompressDocumentRequest(
            $remoteName,
            $requestCompressOptions,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->compressDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
    }

    /*
     * Test for compression document online.
     */
    public function testCompressDocumentOnline()
    {
        $localFolder = "DocumentActions/CompressDocument";
        $localName = "TestCompress.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $localName;
        $requestCompressOptions = new CompressOptions(array(
        ));
        $request = new CompressDocumentOnlineRequest(
            $requestDocument,
            $requestCompressOptions,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->compressDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}